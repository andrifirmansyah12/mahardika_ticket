{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8" />
    <title>Admin | Register</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('Login_inv/bower_components/Ionicons/css/ionicons.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('Login_inv/plugins/iCheck/square/blue.css') }}">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

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
        {{-- <img src="{{asset('LoginTailwindCss')}}/Assets/avatar.svg" class="w-32 py-3" /> --}}
        <h2
          class="my-8 font-bold text-3xl text-gray-700 text-center"
        >
          REGISTER
        </h2>
        
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="py-1 relative">
                <label for="foto"></label>
                <input
                  id="foto"
                  type="file" 
                  name="foto" 
                  value="{{ old('foto') }}" 
                  required 
                  autocomplete="foto"
                  placeholder="foto"
                  class="w-full pl-8 border-b-2 font-display focus:outline-none focus:border-primarycolor transition-all duration-500 capitalize text-md form-control @error('foto') is-invalid @enderror"
                  />
            </div>

          <div class="py-1 relative mt-3">
            <label for="name"><i class="fa fa-user absolute text-primarycolor text-xl"></i></label>
            <input
              type="text"
              id="name" 
              name="name" 
              value="{{ old('name') }}" 
              required autocomplete="name" 
              autofocus
              placeholder="Name"
              class="w-full pl-8 border-b-2 font-display focus:outline-none focus:border-primarycolor capitalize transition-all duration-500 text-md form-control @error('name') is-invalid @enderror"
              />
          </div>

          <div class="py-1 relative mt-3">
            <label for="email"><i class="fa fa-envelope absolute text-primarycolor text-xl"></i></label>
            <input
              id="email" 
              type="email" 
              name="email" 
              value="{{ old('email') }}" 
              required 
              autocomplete="email"
              placeholder="Email"
              class="w-full pl-8 border-b-2 font-display focus:outline-none focus:border-primarycolor transition-all duration-500 text-md form-control @error('email') is-invalid @enderror"
              {{-- style="text-transform: lowercase;" --}}
              />
          </div>

          <div class="py-1 relative mt-3">
            <label for="alamat"><i class="fa fa-map-marker absolute text-primarycolor text-xl"></i></label>
            <input
              id="alamat" 
              type="alamat" 
              name="alamat" 
              value="{{ old('alamat') }}" 
              required 
              autocomplete="alamat"
              placeholder="alamat"
              class="w-full pl-8 border-b-2 font-display focus:outline-none focus:border-primarycolor transition-all duration-500 capitalize text-md form-control @error('alamat') is-invalid @enderror"
              {{-- style="text-transform: lowercase;" --}}
              />
          </div>

          <div class="py-1 relative mt-3 flex flex-row">
            <label for="password"><i class="fa fa-lock absolute text-primarycolor text-xl"></i></label>
            <input
              id="password"
              type="password"
              name="password"
              required
              autocomplete="new-password"
              placeholder="Password"
              class="w-full pl-8 border-b-2 font-display focus:outline-none focus:border-primarycolor transition-all duration-500 text-md @error('password') is-invalid @enderror"
              {{-- style="text-transform: lowercase;" --}}
              />
              <span class="fa fa-eye-slash form-control-feedback view_password"></span>
          </div>

          <div class="py-1 relative mt-3">
            <label for="password-confirm"><i class="fa fa-unlock absolute text-primarycolor text-xl"></i></label>
            <input
                id="password-confirm" 
                type="password"  
                name="password_confirmation" 
                required 
                autocomplete="new-password"
                placeholder="Konfirmasi password"
                class="w-full pl-8 border-b-2 font-display focus:outline-none focus:border-primarycolor transition-all duration-500 text-md @error('password') is-invalid @enderror"
                {{-- style="text-transform: lowercase;" --}}
                />
          </div>

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
                  Register
              </button>
          </div>
          <div class="text-center">
            <div class="hover:underline text-black font-bold opacity-75 focus:outline-none transform transition hover:scale-105 duration-300 ease-in-out">
              @if (Route::has('login'))
                <a class="" href="{{ route('login') }}">{{ __('Kembali ke Login') }}</a>
              @endif
            </div>
          </div>
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