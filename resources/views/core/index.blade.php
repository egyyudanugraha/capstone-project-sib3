@extends('../layouts/base')
@section('content')
<div class="mx-4 my-2">
  <div class="card md:card-side w-full bg-base-100 shadow-xl">
    <figure class="max-w-lg"><img id="preview" class="max-h-screen w-full object-cover"/></figure>
    <div class="card-body justify-between">
      <div class="radial-progress mx-auto" style="--value:0;">0%</div>
      <progress class="progress hidden progress-primary w-full" value="50" max="100"></progress>
      <div id="result" class="my-2 hidden">
      </div>
      <label class="btn btn-primary hidden" for="image">Scan</label>
      <input class="hidden" type="file" id="image" accept="image/*">
    </div>
  </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@1.6.0/dist/tf.min.js"> </script>
<script src="{{ asset('js/classification.js') }}"> </script>
<script>
  const inputFile = document.querySelector('#image')
  const previewImage = document.querySelector('#preview')
  const resultContent = document.querySelector('#result')
  const progressElement = document.querySelector('progress')
  const btnLabel = document.querySelector('label[for=image]')

  // Initial model
  let model;
  const init = async () => {
    model = await tf.loadLayersModel(`{{ asset('model/model.json') }}`,
    {onProgress: progres => loadingModel(progres)})
  }

  // Loading model
  const loadingModel = (progres) => {
    const loading = document.querySelector('.radial-progress');
    const progresInt = progres * 100;
    loading.setAttribute('style', `--value:${progresInt}`)
    loading.innerHTML = `${progresInt}%`;

    if (progresInt === 100){
      btnLabel.classList.remove('hidden')
      loading.classList.add('hidden')
    }          
  }

  const predictImage = async () => {
    const tensor = tf.browser.fromPixels(previewImage)
    .resizeNearestNeighbor([224,224])
    .toFloat()
    .div(tf.scalar(255.0))
    .expandDims();

    const resultPrediction = await model.predict(tensor).data();
    const result = [...resultPrediction]
		.map((p, i) => ({ 
        probability: p,
				className: DISEASE[i]
			}))
    .sort((a, b) => b.probability - a.probability)
    .slice(0, 3)[0];
    
    renderResult(result)
  }

  inputFile.addEventListener('change', (e) => {
    if(e.target.files.length > 0){
      const imageReader = new FileReader();
      imageReader.readAsDataURL(e.target.files[0])

      imageReader.onload = () => {
        let dataURL = imageReader.result;
        previewImage.src = dataURL;
      }

      progressElement.classList.remove('hidden')
      btnLabel.classList.add('hidden')
      resultContent.classList.add('hidden')

      setTimeout(() => {
        predictImage()
      }, 100)
    }
  })

  const renderResult = ({ probability, className }) => {
    progressElement.setAttribute('value', '100')
    setTimeout(() => {
      progressElement.classList.add('hidden')
      resultContent.innerHTML = `
      <h2 class="card-title">
        ${className.nama}
        <div class="badge badge-secondary badge-outline">${ Math.floor(probability * 100).toFixed(2) }%</div>
      </h2>
      ${className.deskripsi}`;
      resultContent.classList.remove('hidden')
      btnLabel.classList.remove('hidden')
    }, 1000)
  }  

 init()
</script>
@endpush