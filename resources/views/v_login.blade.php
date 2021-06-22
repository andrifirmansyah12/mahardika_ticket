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

    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('Login_inv/bower_components/Ionicons/css/ionicons.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('Login_inv/plugins/iCheck/square/blue.css') }}">

    {{-- Css.style --}}
    <link rel="stylesheet" href="{{asset('LoginTailwindCss')}}/static/dist/tailwind.css"/>

  </head>
  {{-- background Body Utama --}}
  <body class="bg-white">
    
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
        src="{{ asset('mahardika_ticket/dist/img/guitar.png') }}"
        class="hidden lg:block w-1/2 hover:scale-110 transition-all duration-500 transform mx-auto"
      />
      <div class="bg-white flex flex-col justify-center items-center w-1/2 rounded-md mt-4 lg:mt-0 py-4 px-6 shadow border-4 border-gray-100">
        {{-- Gambar Avatar --}}
        <img src="{{asset('LoginTailwindCss')}}/Assets/avatar.svg" class="w-32 py-3" />
        <h2
          class="my-8 font-bold text-3xl text-gray-700 text-center"
        >
          MAHARDIKA TICKET
        </h2>
        
        <form method="POST" action="{{ route('login') }}">
          @csrf
          <div class="py-1 relative">
            <label for="your_name"><i class="fa fa-envelope absolute text-primarycolor text-xl"></i></label>
            <input
              type="text"
              name="email"
              id="email"
              placeholder="Email"
              class="w-full pl-8 border-b-2 font-display focus:outline-none focus:border-primarycolor transition-all duration-500 text-md"
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

          <div class="py-1 relative mt-3 flex flex-row">
            <label for="your_pass"><i class="fa fa-lock absolute text-primarycolor text-xl"></i></label>
            <input
              type="password"
              name="password"
              id="password" 
              placeholder="Password"
              class="w-full pl-8 border-b-2 font-display focus:outline-none focus:border-primarycolor transition-all duration-500 text-md"
              {{-- style="text-transform: lowercase;" --}}
              />
              <span class="fa fa-eye-slash form-control-feedback view_password"></span>
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
                  class="w-full bg-yellow-600 lg:mx-0 hover:underline bg-white text-white font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out"
              >
                  Login
              </button>
          </div>
          @guest
          <div class="flex flex-row space-x-4">
            <div class="hover:underline text-black font-bold opacity-75 focus:outline-none transform transition hover:scale-105 duration-300 ease-in-out">
              @if (Route::has('register'))
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
              @endif
            </div>
            <div>
              <p>||</p>
            </div>
            <div class="hover:underline text-black font-bold opacity-75 focus:outline-none transform transition hover:scale-105 duration-300 ease-in-out">
              @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                  {{ __('Forgot Your Password?') }}
                </a>
              @endif
            </div>
          </div>
          @endguest
        </form>
      </div>
    </div>
  </body>
</html>


<script src="{{asset('template-login')}}/vendor/jquery/jquery.min.js"></script>
<script src="{{asset('template-login')}}/js/main.js"></script>
<!-- jQuery 3 -->
<script src="{{asset('Login_inv/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('Login_inv/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- iCheck -->
<script src="{{ asset('Login_inv/plugins/iCheck/icheck.min.js') }}"></script>

<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
    $('.view_password').on('click', function(){
      var x = document.getElementById("password");
      if (x.type === "password") {
          x.type = "text";
          $(this).removeClass('fa-eye-slash');
          $(this).addClass('fa-eye');
      } else {
          x.type = "password";
          $(this).removeClass('fa-eye');
          $(this).addClass('fa-eye-slash');
      }
     });
  });
</script>