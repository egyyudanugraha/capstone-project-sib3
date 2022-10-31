<!doctype html >
<html data-theme="light">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
<div class="drawer">
  <input id="my-drawer" type="checkbox" class="drawer-toggle" />
  <div class="drawer-content">
    <div class="navbar bg-base-100 sticky top-0 z-50">
      <div class="flex-none">
        <label for="my-drawer" class="btn btn-square btn-ghost">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-5 h-5 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
        </label>
      </div>
      <div class="flex-1">
        <a class="btn btn-ghost normal-case text-xl">HERIVES</a>
      </div>
    </div>
    <div class="flex flex-col w-full">
      <div class="hero min-h-screen rounded-b-lg" style="background-image: url(https://source.unsplash.com/random/?paddy);">
        <div class="hero-overlay bg-opacity-60"></div>
        <div class="hero-content text-center text-neutral-content">
          <div class="max-w-md">
            <h1 class="mb-5 text-5xl font-bold">HERIVES</h1>
            <p class="mb-5">Cegah penyakit tanaman padi sejak dini. Padi sehat, petani senang, masyarakat sejahtera!</p>
            <button class="btn btn-primary">Mulai</button>
          </div>
        </div>
      </div>
      <div class="divider text-2xl font-semibold mt-4" id="features">Features</div>
      <div class="p-3 grid gap-2 sm:grid-cols-2 md:grid-cols-3">
        <div class="card w-full bg-base-100 shadow-xl image-full">
          <figure><img src="https://source.unsplash.com/random/1000x225/?paddy" alt="Shoes" /></figure>
          <div class="card-body">
            <h2 class="card-title">Shoes!</h2>
            <p>If a dog chews shoes whose shoes does he choose?</p>
          </div>
        </div>
        <div class="card w-full bg-base-100 shadow-xl image-full">
          <figure><img src="https://source.unsplash.com/random/1000x225/?paddy" alt="Shoes" /></figure>
          <div class="card-body">
            <h2 class="card-title">Shoes!</h2>
            <p>If a dog chews shoes whose shoes does he choose?</p>
          </div>
        </div>
        <div class="card w-full bg-base-100 shadow-xl image-full">
          <figure><img src="https://source.unsplash.com/random/1000x225/?paddy" alt="Shoes" /></figure>
          <div class="card-body">
            <h2 class="card-title">Shoes!</h2>
            <p>If a dog chews shoes whose shoes does he choose?</p>
          </div>
        </div>
      </div>
      <div class="divider text-2xl font-semibold">About Us</div>
      <div class="p-3 grid gap-2 sm:grid-cols-2 md:grid-cols-3">
        <div class="card bg-base-100 shadow-xl">
          <div class="avatar justify-center px-10 pt-10">
            <div class="w-24 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
              <img src="https://avatars.githubusercontent.com/u/24550363?v=4" />
            </div>
          </div>
          <div class="card-body items-center text-center">
            <h2 class="card-title">Egy Yuda Nugraha</h2>
            <p>I'm a <span class="font-semibold">Front-End Developer</span> in this project</p>
            <div class="card-actions">
              <button class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" class="mr-2" viewBox="0 0 24 24">
                    <path
                      class="fill-primary-content"
                      d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"
                    />
                </svg>GitHub</button>
              <button class="btn btn-primary">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" class="mr-2" viewBox="0 0 24 24">
                    <path
                      class="fill-primary-content"
                      d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"
                    />
                </svg>Instagram</button>
            </div>
          </div>
        </div>
        <div class="card bg-base-100 shadow-xl">
          <div class="avatar justify-center px-10 pt-10">
            <div class="w-24 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
              <img src="https://placeimg.com/192/192/people" />
            </div>
          </div>
          <div class="card-body items-center text-center">
            <h2 class="card-title">Shoes!</h2>
            <p>If a dog chews shoes whose shoes does he choose?</p>
            <div class="card-actions">
              <button class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" class="mr-2" viewBox="0 0 24 24">
                    <path
                      class="fill-primary-content"
                      d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"
                    />
                </svg>GitHub</button>
              <button class="btn btn-primary">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" class="mr-2" viewBox="0 0 24 24">
                    <path
                      class="fill-primary-content"
                      d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"
                    />
                </svg>Instagram</button>
            </div>
          </div>
        </div>
        <div class="card bg-base-100 shadow-xl">
          <div class="avatar justify-center px-10 pt-10">
            <div class="w-24 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
              <img src="https://placeimg.com/192/192/people" />
            </div>
          </div>
          <div class="card-body items-center text-center">
            <h2 class="card-title">Shoes!</h2>
            <p>If a dog chews shoes whose shoes does he choose?</p>
            <div class="card-actions">
              <button class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" class="mr-2" viewBox="0 0 24 24">
                    <path
                      class="fill-primary-content"
                      d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"
                    />
                </svg>GitHub</button>
              <button class="btn btn-primary">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" class="mr-2" viewBox="0 0 24 24">
                    <path
                      class="fill-primary-content"
                      d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"
                    />
                </svg>Instagram</button>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer footer-center p-10 bg-primary text-primary-content">
        <div>
          <svg width="50" height="50" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" class="inline-block fill-current"><path d="M22.672 15.226l-2.432.811.841 2.515c.33 1.019-.209 2.127-1.23 2.456-1.15.325-2.148-.321-2.463-1.226l-.84-2.518-5.013 1.677.84 2.517c.391 1.203-.434 2.542-1.831 2.542-.88 0-1.601-.564-1.86-1.314l-.842-2.516-2.431.809c-1.135.328-2.145-.317-2.463-1.229-.329-1.018.211-2.127 1.231-2.456l2.432-.809-1.621-4.823-2.432.808c-1.355.384-2.558-.59-2.558-1.839 0-.817.509-1.582 1.327-1.846l2.433-.809-.842-2.515c-.33-1.02.211-2.129 1.232-2.458 1.02-.329 2.13.209 2.461 1.229l.842 2.515 5.011-1.677-.839-2.517c-.403-1.238.484-2.553 1.843-2.553.819 0 1.585.509 1.85 1.326l.841 2.517 2.431-.81c1.02-.33 2.131.211 2.461 1.229.332 1.018-.21 2.126-1.23 2.456l-2.433.809 1.622 4.823 2.433-.809c1.242-.401 2.557.484 2.557 1.838 0 .819-.51 1.583-1.328 1.847m-8.992-6.428l-5.01 1.675 1.619 4.828 5.011-1.674-1.62-4.829z"></path></svg>
          <p class="font-bold">
            ACME Industries Ltd. <br>Providing reliable tech since 1992
          </p> 
          <p>Copyright © 2022 - All right reserved</p>
        </div> 
        <div>
          <div class="grid grid-flow-col gap-4">
            <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg></a> 
            <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path></svg></a> 
            <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path></svg></a>
          </div>
        </div>
      </footer>
      <button id="btn-themes" class="btn btn-square border-none p-3 bg-primary fixed z-[999] bottom-6 right-6">
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 452.025 452.025" stroke="currentColor" xml:space="preserve">
                <g>
                    <path class="fill-primary-content" d="M147.912,363.325c-4.7-4.7-12.3-4.7-17,0c-4.7,4.7-4.7,12.3,0,17l13.6,13.6h-55.2c-35.9,0-65-29.2-65-65v-40.3
                        c0-6.6-5.4-12-12-12s-12,5.4-12,12v40.3c0,49.1,39.9,89,89,89h55.2l-13.6,13.6c-4.7,4.7-4.7,12.3,0,17c2.3,2.3,5.4,3.5,8.5,3.5
                        s6.1-1.2,8.5-3.5l34.1-34.1c4.7-4.7,4.7-12.3,0-17L147.912,363.325z"/>
                    <path class="fill-primary-content" d="M210.312,0.025h-197.1c-6.6,0-12,5.4-12,12v197.1c0,6.6,5.4,12,12,12h197.1c6.6,0,12-5.4,12-12v-197.1
                        C222.312,5.425,217.012,0.025,210.312,0.025z M198.312,197.125h-173.1v-173.1h173.1V197.125z"/>
                    <path class="fill-primary-content" d="M362.612,34.125h-55.2l13.6-13.6c4.7-4.7,4.7-12.3,0-17s-12.3-4.7-17,0l-34,34.1c-4.7,4.7-4.7,12.3,0,17l34.1,34.1
                        c2.3,2.3,5.4,3.5,8.5,3.5s6.1-1.2,8.5-3.5c4.7-4.7,4.7-12.3,0-17l-13.6-13.6h55.2c35.9,0,65,29.2,65,65v40.3c0,6.6,5.4,12,12,12
                        s12-5.4,12-12v-40.3C451.712,74.025,411.712,34.125,362.612,34.125z"/>
                    <path class="fill-primary-content" d="M438.812,428.025c-3.2,0-6.3,1.3-8.5,3.5s-3.5,5.3-3.5,8.5c0,3.1,1.3,6.3,3.5,8.5s5.3,3.5,8.5,3.5s6.3-1.3,8.5-3.5
                        s3.5-5.3,3.5-8.5s-1.3-6.3-3.5-8.5C445.012,429.325,441.912,428.025,438.812,428.025z"/>
                    <path class="fill-primary-content" d="M389.512,428.025c-6.6,0-12,5.4-12,12s5.4,12,12,12s12-5.4,12-12S396.112,428.025,389.512,428.025z"/>
                    <path class="fill-primary-content" d="M290.912,428.025c-6.6,0-12,5.4-12,12s5.4,12,12,12s12-5.4,12-12S297.612,428.025,290.912,428.025z"/>
                    <path class="fill-primary-content" d="M340.212,428.025c-6.6,0-12,5.4-12,12s5.4,12,12,12s12-5.4,12-12S346.812,428.025,340.212,428.025z"/>
                    <path class="fill-primary-content" d="M241.713,428.025c-3.2,0-6.3,1.3-8.5,3.5s-3.5,5.3-3.5,8.5c0,3.1,1.3,6.3,3.5,8.5s5.3,3.5,8.5,3.5c3.1,0,6.3-1.3,8.5-3.5
                        s3.5-5.3,3.5-8.5s-1.3-6.3-3.5-8.5S244.812,428.025,241.713,428.025z"/>
                    <path class="fill-primary-content" d="M241.713,378.725c-6.6,0-12,5.4-12,12s5.4,12,12,12s12-5.4,12-12S248.312,378.725,241.713,378.725z"/>
                    <path class="fill-primary-content" d="M241.713,329.425c-6.6,0-12,5.4-12,12s5.4,12,12,12s12-5.4,12-12S248.312,329.425,241.713,329.425z"/>
                    <path class="fill-primary-content" d="M241.713,280.125c-6.6,0-12,5.4-12,12s5.4,12,12,12s12-5.4,12-12S248.312,280.125,241.713,280.125z"/>
                    <path class="fill-primary-content" d="M241.713,230.925c-3.2,0-6.3,1.3-8.5,3.5s-3.5,5.3-3.5,8.5s1.3,6.3,3.5,8.5s5.3,3.5,8.5,3.5c3.1,0,6.3-1.3,8.5-3.5
                        s3.5-5.3,3.5-8.5c0-3.1-1.3-6.3-3.5-8.5C247.912,232.125,244.812,230.925,241.713,230.925z"/>
                    <path class="fill-primary-content" d="M389.512,230.925c-6.6,0-12,5.4-12,12s5.4,12,12,12s12-5.4,12-12S396.112,230.925,389.512,230.925z"/>
                    <path class="fill-primary-content" d="M340.212,230.925c-6.6,0-12,5.4-12,12s5.4,12,12,12s12-5.4,12-12S346.812,230.925,340.212,230.925z"/>
                    <path class="fill-primary-content" d="M290.912,230.925c-6.6,0-12,5.4-12,12s5.4,12,12,12s12-5.4,12-12S297.612,230.925,290.912,230.925z"/>
                    <path class="fill-primary-content" d="M438.812,230.925c-3.2,0-6.3,1.3-8.5,3.5s-3.5,5.3-3.5,8.5s1.3,6.3,3.5,8.5s5.3,3.5,8.5,3.5s6.3-1.3,8.5-3.5
                        s3.5-5.3,3.5-8.5c0-3.1-1.3-6.3-3.5-8.5C445.012,232.225,441.912,230.925,438.812,230.925z"/>
                    <path class="fill-primary-content" d="M438.812,280.125c-6.6,0-12,5.4-12,12s5.4,12,12,12s12-5.4,12-12S445.412,280.125,438.812,280.125z"/>
                    <path class="fill-primary-content" d="M438.812,378.725c-6.6,0-12,5.4-12,12s5.4,12,12,12s12-5.4,12-12S445.412,378.725,438.812,378.725z"/>
                    <path class="fill-primary-content" d="M438.812,329.425c-6.6,0-12,5.4-12,12s5.4,12,12,12s12-5.4,12-12S445.412,329.425,438.812,329.425z"/>
                </g>
            </svg>
      </button>
    </div>
  </div> 
  <div class="drawer-side">
    <label for="my-drawer" class="drawer-overlay"></label>
    <ul class="menu p-4 overflow-y-auto w-80 bg-base-100 text-base-content">
      <!-- Sidebar content here -->
      <label for="my-drawer" class="btn btn-square btn-ghost">
        <svg class="swap-on fill-current" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 512 512"><polygon points="400 145.49 366.51 112 256 222.51 145.49 112 112 145.49 222.51 256 112 366.51 145.49 400 256 289.49 366.51 400 400 366.51 289.49 256 400 145.49"/></svg>
      </label>
      <li><a href="#features">Sidebar Item 1</a></li>
      <li><a>Sidebar Item 2</a></li>
      
    </ul>
  </div>
</div>
<script>
    const themes = ['light', 'dark', 'cupcake', 'bumblebee', 'emerald', 'corporate', 'synthwave', 'retro', 'cyberpunk', 'valentine', 'halloween', 'garden', 'forest', 'aqua', 'lofi', 'pastel', 'fantasy', 'wireframe', 'black', 'luxury', 'dracula', 'cmyk', 'autumn', 'business', 'acid', 'lemonade', 'night', 'coffee', 'winter'];
    const btnThemes = document.querySelector('#btn-themes')
    const currentTheme = localStorage.getItem('theme')

    const themeMode = document.querySelector('html').attributes['data-theme']
    themeMode.value = currentTheme

    btnThemes.addEventListener('click', () => {
        const randTheme = Math.floor(Math.random() * themes.length)
        themeMode.value = themes[randTheme]
        localStorage.setItem('theme', themes[randTheme])
    })
</script>
</body>
</html>