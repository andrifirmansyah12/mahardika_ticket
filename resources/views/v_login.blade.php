<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Login</title>
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
            <h1 class="text-4xl font-bold text-white text-center">Mahardika Ticket</h1>
        </a>
    </header>

    <main class="bg-white max-w-lg mx-auto p-8 md:p-12 my-10 rounded-lg shadow-2xl">
        <section>
            <h3 class="font-bold text-2xl">Welcome to Mahardika Ticket</h3>
            <p class="text-gray-600 pt-2">Sign in to your account.</p>
        </section>

        <section class="mt-10">
            <form class="flex flex-col" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="email">Email</label>
                    <input 
                        type="text" 
                        id="email" 
                        name="email"
                        class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3">
                </div>

                {{-- Email Error --}}
                @error('email')
                <div class="px-4" role="alert">
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

                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="password">Password</label>
                    <div class="flex">
                    <input 
                        type="password" 
                        id="password" 
                        name="password"
                        class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3">
                    <span class="fa fa-eye-slash form-control-feedback view_password px-3"></span> 
                    </div>   
                </div>

                {{-- Error Password --}}
                @error('password')
                <div class="px-4" role="alert">
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

                @if (session('status'))
                <div class="px-4 py-2 -mx-3" role="alert">
                    <div class="mx-3">
                    <p class="text-sm text-gray-600 dark:text-gray-200">
                        {{session('status')}}
                    </p>
                    </div>
                </div>
                @endif

                @guest
                <div class="flex justify-end">
                    @if (Route::has('password.request'))
                        <a class="text-sm text-purple-600 hover:text-purple-700 hover:underline mb-6" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
                @endguest

                <button 
                    name="signin" 
                    id="signin"
                    class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200" 
                    type="submit"
                    >
                        Sign In
                </button>
            </form>
        </section>
    </main>

    @guest
    <div class="max-w-lg mx-auto text-center mt-12 mb-6">
        @if (Route::has('register'))
        <p class="text-white">Don't have an account?
          <a class="nav-link hover:underline hover:text-gray-200" href="{{ route('register') }}">{{ __('Register') }}</a>
        .</p>
        @endif
        {{-- <p class="text-white">Don't have an account? <a href="#" class="font-bold hover:underline">Sign up</a>.</p> --}}
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