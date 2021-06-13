<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Admin | Login</title>

    <!-- FavIcon -->
    <link rel="shortcut icon" href="{{ asset('mahardika_ticket/dist/img/logo9.png') }}">

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
    />

    {{-- Css.style --}}
    <link rel="stylesheet" href="{{asset('LoginTailwindCss')}}/static/dist/tailwind.css"/>

  </head>
  {{-- background Body Utama --}}
  <body class="bg-yellow-100">
    
    <img
        {{-- Gambar Variasi Ombak --}}
      src="{{asset('LoginTailwindCss')}}/Assets/wave.png"
      class="fixed hidden lg:block inset-0 h-full"
      style="z-index: -1;"
    />
    <div
      class="w-screen h-screen flex flex-col justify-center items-center lg:grid lg:grid-cols-2"
    >
      <img
        src=""
        class="hidden lg:block w-1/2 transform mx-auto"
      />
      <div class="bg-white flex flex-col justify-center items-center w-1/2 rounded-full mt-4 lg:mt-0 py-4 px-8 shadow border-2 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
        {{-- Gambar Avatar --}}
        <img src="{{asset('LoginTailwindCss')}}/Assets/avatar.svg" class="w-32 py-3" />
        <h2
          class="my-8 font-display font-bold text-3xl text-gray-700 text-center"
        >
          Mahardika Ticket
        </h2>
        
        <form method="POST" action="{{ route('login') }}">
          @csrf
          <div class="py-1 relative">
            <label for="your_name"><i class="fa fa-user absolute text-primarycolor text-xl"></i></label>
            <input
              type="text"
              name="email"
              id="email"
              placeholder="Email"
              class="pl-8 border-b-2 font-display focus:outline-none focus:border-primarycolor transition-all duration-500 capitalize text-md"
              style="text-transform: lowercase;"
              />
          </div>
          
          @error('email')
          <div class="px-4 py-2 -mx-3" role="alert">
            <div class="mx-3">
              <span class="font-semibold text-red-500 dark:text-red-400"
                >Error!</span
              >
              <p class="text-sm text-gray-600 dark:text-gray-200">
                {{ $message }}
              </p>
            </div>
          </div>
          @enderror

          <div class="py-1 relative mt-3">
            <label for="your_pass"><i class="fa fa-lock absolute text-primarycolor text-xl"></i></label>
            <input
              type="password"
              name="password"
              id="password" 
              placeholder="password"
              class="pl-8 border-b-2 font-display focus:outline-none focus:border-primarycolor transition-all duration-500 capitalize text-md"
              style="text-transform: lowercase;"
              />
          </div>

          @error('password')
          <div class="px-4 py-2 -mx-3" role="alert">
            <div class="mx-3">
              <span class="font-semibold text-red-500 dark:text-red-400"
                >Error</span
              >
              <p class="text-sm text-gray-600 dark:text-gray-200">
                {{ $message }}
              </p>
            </div>
          </div>  
          @enderror

          @if (session('pesan'))
          <div class="px-4 py-2 -mx-3" role="alert">
            <div class="mx-3">
              <p class="text-sm text-gray-600 dark:text-gray-200">
                {{session('pesan')}}
              </p>
            </div>
          </div>
          @endif
          
          <div class="py-5">
              <button
                  name="signin" 
                  id="signin"
                  class="py-3 px-20 bg-yellow-600 lg:mx-0 hover:underline bg-white text-white font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out"
              >
                  Login
          </button>
        </form>
      </div>
    </div>
  </body>
</html>


<script src="{{asset('template-login')}}/vendor/jquery/jquery.min.js"></script>
<script src="{{asset('template-login')}}/js/main.js"></script>