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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Open+Sans&family=Roboto&display=swap" rel="stylesheet">

     <!-- Ionicons -->
     <link rel="stylesheet" href="{{ asset('Login_inv/bower_components/Ionicons/css/ionicons.min.css') }}">
     <!-- iCheck -->
     <link rel="stylesheet" href="{{ asset('Login_inv/plugins/iCheck/square/blue.css') }}">

    <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <style>
        .body-bg {
            background-color: #181863;
            background-image: linear-gradient(315deg, #181863 0%);
        }
        .modal {
        transition: opacity 0.25s ease;
        }
        body.modal-active {
        overflow-x: hidden;
        overflow-y: visible !important;
        }
        .font-lato {
            font-family: 'Montserrat', sans-serif;
        }

        .text-blue-ticket{
            color: #181863;
        }

        .border-blue-ticket{
            border-color: #181863;
        }

        .bg-blue-ticket{
            background-color: #181863;
        }
    </style>
</head>
<body class="body-bg min-h-screen pt-12 md:pt-20 pb-6 px-2 md:px-0" style="font-family: 'Montserrat', sans-serif;">
    <header class="max-w-lg mx-auto">
        <a href="#">
            <h1 class="text-4xl font-bold text-white text-center">Mahardika Ticket</h1>
        </a>
    </header>

    <main class="bg-white max-w-lg mx-auto p-8 md:p-12 my-10 rounded-lg shadow-2xl">
        <section>
            <h3 class="font-bold text-blue-ticket text-2xl">Welcome to Mahardika Ticket</h3>
            <p class="text-blue-ticket opacity-80 pt-2">Sign in to your account.</p>
        </section>

        <section class="mt-10">
            <form class="flex flex-col" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-6 pt-3 rounded bg-blue-ticket">
                    <label class="block text-white text-sm font-bold mb-2 ml-3" for="email">Email</label>
                    <input 
                        type="text" 
                        id="email" 
                        name="email"
                        placeholder="Email"
                        class="bg-gray-200 pt-2 w-full text-blue-ticket focus:outline-none border-b-4 border-gray-300 focus:border-gray-400 transition duration-500 px-3 pb-3">
                </div>

                {{-- Email Error --}}
                @error('email')
                <div class="px-4" role="alert">
                  <div class="mx-3">
                    <span class="font-semibold text-red-500 dark:text-red-400"
                        >Error!</span
                    >
                    <p class="text-sm text-blue-ticket dark:text-blue-ticket">
                        {{ $message }}
                    </p>
                  </div>
                </div>
                @enderror

                <div class="mb-6 pt-3 rounded bg-blue-ticket">
                    <label class="block text-white text-sm font-bold mb-2 ml-3" for="password">Password</label>
                    <div class="flex items-center">
                    <input 
                        type="password" 
                        id="password" 
                        name="password"
                        placeholder="Password"
                        class="bg-gray-200 w-full pt-2 text-blue-ticket focus:outline-none border-b-4 border-gray-300 focus:border-gray-400 transition duration-500 px-3 pb-3">
                    <span class="bg-gray-200 py-4 fa fa-eye-slash form-control-feedback view_password px-3"></span> 
                    </div>   
                </div>

                {{-- Error Password --}}
                @error('password')
                <div class="px-4" role="alert">
                    <div class="mx-3">
                    <span class="font-semibold text-red-500 dark:text-red-400"
                        >Error</span
                    >
                    <p class="text-sm text-blue-ticket dark:text-blue-ticket">
                        {{ $message }}
                    </p>
                    </div>
                </div>  
                @enderror

                @if (session('status'))
                <div class="px-4 py-2 -mx-3" role="alert">
                    <div class="mx-3">
                    <p class="text-sm text-blue-ticket dark:text-blue-ticket">
                        {{session('status')}}
                    </p>
                    </div>
                </div>
                @endif

                @guest
                <div class="flex justify-end">
                    @if (Route::has('password.request'))
                        <a class="text-sm text-blue-ticket hover:opacity-90 hover:underline mb-6" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
                @endguest

                <button 
                    name="signin" 
                    id="signin"
                    class="bg-blue-ticket text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200" 
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
        <button href="#" class="modal-open hover:underline">Privacy</button>
    </footer>

    <!--Modal-->
    <div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
        <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>
        
        <div class="modal-container bg-white w-5/6 md:w-1/2 mx-auto rounded shadow-lg z-50">
        
            <!--Title-->
            <div class="modal-overlay relative flex items-center px-10 justify-between py-3 shadow-md">
                <div>
                    <p class="text-2xl font-lato text-blue-ticket font-bold">Mahardika Ticket</p>
                </div>
                <div class="modal-close cursor-pointer z-50">
                    <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                    <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                    </svg>
                </div>
            </div>
            <!-- Add margin if you want to see some of the overlay behind the modal-->
            <div class="modal-content py-4 text-left px-6 ">
                <!--Body-->

                <div class="px-5 space-y-5 py-5 font-lato text-blue-ticket overflow-y-auto h-80">
                    <p class="text-2xl">
                        Privacy Policy
                    </p>
                    <p class="font-lato text-blue-ticket leading-7"> 
                        A privacy policy is a statement or legal document (in privacy law)
                        that discloses some or all of the ways a party gathers, uses, discloses,
                        and manages a customer or client's data. Personal information can be anything
                        that can be used to identify an individual, not limited to the person's name,
                        address, date of birth, marital status, contact information, ID issue,
                        and expiry date, financial records, credit information, medical history, 
                        where one travels, and intentions to acquire goods and services. 
                        In the case of a business, it is often a statement that declares a party's policy
                        on how it collects, stores, and releases personal information it collects. 
                        It informs the client what specific information is collected, 
                        and whether it is kept confidential, shared with partners, 
                        or sold to other firms or enterprises. Privacy policies typically represent a broader,
                        more generalized treatment, as opposed to data use statements, 
                        which tend to be more detailed and specific.
                    </p>
                </div>
            </div>
            <!--Footer-->
            <div class="border-t-2 border-gray-200">
                <div class="flex justify-end py-3 px-5 shadow-md">
                    <button class="modal-close px-4 py-1 bg-blue-ticket font-lato text-sm font-semibold text-white tracking-widest text-white">
                        Confirm
                    </button>
                </div>
            </div>
        </div>
    </div>
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

<script>
     var openmodal = document.querySelectorAll('.modal-open')
    for (var i = 0; i < openmodal.length; i++) {
      openmodal[i].addEventListener('click', function(event){
    	event.preventDefault()
    	toggleModal()
      })
    }
    
    const overlay = document.querySelector('.modal-overlay')
    overlay.addEventListener('click', toggleModal)
    
    var closemodal = document.querySelectorAll('.modal-close')
    for (var i = 0; i < closemodal.length; i++) {
      closemodal[i].addEventListener('click', toggleModal)
    }
    
    document.onkeydown = function(evt) {
      evt = evt || window.event
      var isEscape = false
      if ("key" in evt) {
    	isEscape = (evt.key === "Escape" || evt.key === "Esc")
      } else {
    	isEscape = (evt.keyCode === 27)
      }
      if (isEscape && document.body.classList.contains('modal-active')) {
    	toggleModal()
      }
    };
    
    
    function toggleModal () {
      const body = document.querySelector('body')
      const modal = document.querySelector('.modal')
      modal.classList.toggle('opacity-0')
      modal.classList.toggle('pointer-events-none')
      body.classList.toggle('modal-active')
    }
</script>