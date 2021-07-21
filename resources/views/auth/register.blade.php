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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Register</title>
  	<meta name="author" content="David Grzyb">
    <meta name="description" content="">

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

    <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <style>
        .body-bg {
            background-color: #9921e8;
            background-image: linear-gradient(315deg, #9921e8 0%, #5f72be 74%);
        }
    </style>
</head>
<body class="body-bg min-h-screen pt-12 md:pt-20 pb-6 px-2 md:px-0" style="font-family:'Lato',sans-serif;">
    <header class="max-w-lg mx-auto">
        <a href="#">
            <h1 class="text-4xl font-bold text-white text-center">REGISTER</h1>
        </a>
    </header>

    <main class="bg-white max-w-lg mx-auto p-8 md:p-12 my-10 rounded-lg shadow-2xl">
        <section>
            <h3 class="font-bold text-2xl">Welcome to Mahardika Ticket</h3>
            <p class="text-gray-600 pt-2">Sign Up to your account.</p>
        </section>

        <section class="mt-10">
            <form class="flex flex-col" method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-6 pt-3 rounded bg-gray-200">
                  <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="foto">Foto</label>
                  <input 
                    type="file"
                    id="foto" 
                    name="foto" 
                    value="{{ old('foto') }}" 
                    required autocomplete="foto" 
                    autofocus
                    class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3 @error('foto') is-invalid @enderror">
                </div>

                <div class="mb-6 pt-3 rounded bg-gray-200">
                  <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="name">Nama</label>
                  <input 
                    type="text"
                    id="name" 
                    name="name" 
                    value="{{ old('name') }}" 
                    required autocomplete="name" 
                    autofocus
                    class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3 @error('name') is-invalid @enderror">
                </div>

                <div class="mb-6 pt-3 rounded bg-gray-200">
                  <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="alamat">Alamat</label>
                  <input 
                    type="text"
                    id="alamat" 
                    name="alamat" 
                    value="{{ old('alamat') }}" 
                    required autocomplete="alamat" 
                    autofocus
                    class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3 @error('alamat') is-invalid @enderror">
                </div>

                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="email">Email</label>
                    <input 
                        type="text" 
                        id="email" 
                        name="email"
                        value="{{ old('email') }}" 
                        required autocomplete="email" 
                        autofocus
                        class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3 @error('email') is-invalid @enderror">
                </div>

                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="password">Password</label>
                    <div class="flex">
                    <input 
                        type="password" 
                        id="password" 
                        name="password"
                        value="{{ old('password') }}" 
                        required autocomplete="new-password" 
                        autofocus
                        class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3 @error('password') is-invalid @enderror">
                    <span class="fa fa-eye-slash form-control-feedback view_password px-3"></span> 
                    </div>   
                </div>

                <div class="mb-6 pt-3 rounded bg-gray-200">
                  <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="password-confirm">Konfirmasi Password</label>
                  <div class="flex">
                  <input 
                      type="password" 
                      id="password" 
                      name="password_confirmation"
                      value="{{ old('password') }}" 
                      required autocomplete="new-password" 
                      autofocus
                      class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3 @error('password') is-invalid @enderror">
                  <span class="fa fa-eye-slash form-control-feedback view_password px-3"></span> 
                  </div>   
                </div>

                <button 
                    name="register" 
                    id="register"
                    class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200" 
                    type="submit"
                    >
                        Register
                </button>
            </form>
        </section>
    </main>

    @guest
    <div class="max-w-lg mx-auto text-center mt-12 mb-6">
      @if (Route::has('login'))
      <a class="text-white hover:underline hover:text-gray-200" href="{{ route('login') }}">{{ __('Kembali ke Login') }}</a>
      @endif
    </div>
    @endguest

    <footer class="max-w-lg mx-auto flex justify-center text-white">
        <a href="#" class="hover:underline">Contact</a>
        <span class="mx-3">•</span>
        <a href="#" class="hover:underline">Privacy</a>
    </footer>
</body>
</html>

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