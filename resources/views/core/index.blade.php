@extends('../layouts/base')
@section('content')
<div class="mx-4 my-2">
  <div class="card w-full bg-base-100 shadow-xl">
    <figure><img id="preview" /></figure>
    <div class="card-body">
      <div id="result" class="hidden my-2">
        <h2 class="card-title">Padi sehat!</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio sit quisquam itaque tempora necessitatibus incidunt dolores fugit ullam quasi quam?</p>
      </div>
      <label class="btn btn-primary" for="image">Scan</label>
      <input class="hidden" type="file" id="image" accept="image/*">
    </div>
  </div>
</div>
@endsection

@push('scripts')
<script>
  const inputFile = document.querySelector('#image')
  const previewImage = document.querySelector('#preview')
  const resultContent = document.querySelector('#result')
  const btnLabel = document.querySelector('label[for=image]')

  inputFile.addEventListener('change', e => {
    if(e.target.files.length > 0){
      const url = URL.createObjectURL(e.target.files[0])
      previewImage.src = url
      resultContent.classList.remove('hidden')
      btnLabel.innerText = 'Scan lagi'
    }
  })
</script>
@endpush