{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
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
    <title>Admin | Reset Password</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

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
          RESET <br> PASSWORD
        </h2>
        
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="py-1 relative mt-3">
                <label for="email"><i class="fa fa-envelope absolute text-primarycolor text-xl"></i></label>
                <input
                id="email" 
                type="email" 
                name="email" 
                value="{{ old('email') }}" 
                required autocomplete="email" 
                autofocus
                placeholder="Email"
                class="w-full pl-8 border-b-2 font-display focus:outline-none focus:border-primarycolor transition-all duration-500 text-md form-control @error('email') is-invalid @enderror"
                {{-- style="text-transform: lowercase;" --}}
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

            @if (session('pesan'))
            <div class="px-4 py-2 -mx-3" role="alert">
                <div class="mx-3">
                <p class="text-sm text-gray-600 dark:text-gray-200">
                    {{session('status')}}
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
                {{ __('Send Password Reset Link') }}
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