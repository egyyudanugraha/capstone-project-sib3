@extends('../layouts/base')
@section('content')
  <div class="hero min-h-screen" style="background-image: url(https://source.unsplash.com/random/?paddy);">
    <div class="hero-overlay bg-opacity-60"></div>
    <div class="hero-content text-center text-neutral-content">
      <div class="max-w-md">
        <h1 class="text-5xl font-bold">HERIVES</h1>
        <p class="mb-5 text-xl font-medium">Healthy Rice Leaves</p>
        <p class="mb-5">Cegah penyakit tanaman padi sejak dini. Padi sehat, petani senang, masyarakat sejahtera!</p>
        <a href="{{ route('scan') }}" class="btn btn-primary">MULAI</a>
      </div>
    </div>
  </div>
  <div class="divider text-2xl font-semibold">Features</div>
  <div class="p-3 grid gap-2 sm:grid-cols-2 md:grid-cols-3">
    <div class="card w-full bg-base-100 shadow-xl image-full">
      <figure><img src="https://source.unsplash.com/random/1000x225/?paddy" alt="Simple" /></figure>
      <div class="card-body">
        <h2 class="card-title">Simple!</h2>
        <p>Hanya dengan sebuah foto, HERIVES dapat mengetahui penyakit pada padi.</p>
      </div>
    </div>
    <div class="card w-full bg-base-100 shadow-xl image-full">
      <figure><img src="https://source.unsplash.com/random/1000x225/?paddy" alt="Mudah dan cepat" /></figure>
      <div class="card-body">
        <h2 class="card-title">Mudah & cepat!</h2>
        <p>HERIVES dapat diakses dimanapun kapanpun dengan mudah dan cepat terutama di perangkat mobile</p>
      </div>
    </div>
    <div class="card w-full bg-base-100 shadow-xl image-full">
      <figure><img src="https://source.unsplash.com/random/1000x225/?paddy" alt="Solutive" /></figure>
      <div class="card-body">
        <h2 class="card-title">Solutive</h2>
        <p>HERIVES akan memberikan solusi pada padi yang memiliki penyakit</p>
      </div>
    </div>
  </div>
  <div class="divider text-2xl font-semibold">About Us</div>
  <div class="p-3 grid gap-2 sm:grid-cols-2 md:grid-cols-3">
    <div class="card bg-base-100 shadow-xl">
      <div class="avatar justify-center px-10 pt-10">
        <div class="w-24 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
          <img src="{{ url('/images/yuda.webp') }}" />
        </div>
      </div>
      <div class="card-body items-center text-center">
        <h2 class="card-title">Egy Yuda Nugraha</h2>
        <p>Front-End Developer</p>
        <div class="card-actions justify-center">
          <a href="https://github.com/egyyudanugraha/" target="_blank" class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" class="mr-2" viewBox="0 0 24 24">
                <path
                  class="fill-primary-content"
                  d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"
                />
            </svg>GitHub</a>
          <a href="https://www.linkedin.com/in/egyyudanugraha/" target="_blank" class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" class="mr-2" viewBox="0 0 24 24">
              <path class="fill-primary-content" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
            Linkedin
          </a>
        </div>
      </div>
    </div>
    <div class="card bg-base-100 shadow-xl">
      <div class="avatar justify-center px-10 pt-10">
        <div class="w-24 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
          <img src="{{ url('/images/dedy.webp') }}" />
        </div>
      </div>
      <div class="card-body items-center text-center">
        <h2 class="card-title">Dedy Yehezkiel Marbun</h2>
        <p>Machine Learning Engineer</p>
        <div class="card-actions justify-center">
          <a href="https://github.com/DDYYMMM" target="_blank" class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" class="mr-2" viewBox="0 0 24 24">
                <path
                  class="fill-primary-content"
                  d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"
                />
            </svg>GitHub</a>
          <a href="https://www.linkedin.com/in/dedy-yehezkiel-147762249/" target="_blank" class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" class="mr-2" viewBox="0 0 24 24">
              <path class="fill-primary-content" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
            Linkedin
          </a>
        </div>
      </div>
    </div>
    <div class="card bg-base-100 shadow-xl">
      <div class="avatar justify-center px-10 pt-10">
        <div class="w-24 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
          <img src="{{ url('/images/yaspin.webp') }}" />
        </div>
      </div>
      <div class="card-body items-center text-center">
        <h2 class="card-title">Yaspin Andika Muhamad Nur Cholis</h2>
        <p>Machine Learning Engineer</p>
        <div class="card-actions justify-center">
          <a href="https://github.com/yayaspinnn" target="_blank" class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" class="mr-2" viewBox="0 0 24 24">
                <path
                  class="fill-primary-content"
                  d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"
                />
            </svg>GitHub</a>
          <a href="https://www.linkedin.com/in/yaspin-andika/" target="_blank" class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" class="mr-2" viewBox="0 0 24 24">
              <path class="fill-primary-content" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
            Linkedin
          </a>
        </div>
      </div>
    </div>
  </div>
@endsection