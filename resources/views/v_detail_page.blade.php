<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahardika Ticket</title>
    <link rel="stylesheet" href="{{ asset('Admin/dist/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('Admin/dist/img/Indramayu.png') }}">
    <style>
      html{
        scroll-behavior: smooth;
      }
    </style>

</head>
<body class="leading-normal tracking-normal bg-white text-white" style="font-family: 'Source Sans Pro', sans-serif;">
  <nav id="header" class="fixed w-full z-30 top-0 text-black bg-white">
    <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
      <div class="flex items-center space-x-1 p-2">
        <button class="relative z-10 w-8 h-8">
            <img class="" src="{{ asset('Admin/dist/img/Indramayu.png') }}">
        </button>
        <a href="#" class="font-sans toggleColour text-black no-underline hover:no-underline text-2xl lg:text-2xl">
          Mahardika Ticket
        </a>
      </div>
        
      <div class="block lg:hidden pr-4">
        <button id="nav-toggle" class="flex items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
          <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <title>Menu</title>
            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
          </svg>
        </button>
      </div>
      <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20" id="nav-content">
        <ul class="list-reset lg:flex justify-end flex-1 items-center">
          <li class="mr-3">
            <a class="inline-block py-2 px-1 text-black font-bold font-sans no-underline" href="#">Home</a>
          </li>
          <li class="mr-3">
            <a class="inline-block text-black no-underline font-sans hover:text-gray-800 hover:text-underline py-2 px-1" href="#">About Us</a>
          </li>
          <li class="mr-3">
            <a class="inline-block text-black no-underline font-sans hover:text-gray-800 hover:text-underline py-2 px-1" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
    <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
  </nav>

    <section class="bg-gray-200">
      <div class="px-10 mb-6 py-4">
        <div class="rounded-md bg-white mt-20">
          <div class="w-full">
            <img src="{{ asset('mahardika_ticket/dist/img/img4.jpg') }}" class="md:w-full rounded-md"></img>
          </div>
          <div class="flex flex-wrap">
            <div class="w-5/6 sm:w-1/2 p-8">
              <h3 class="px-8 md:mt-16 mx-auto font-bold text-green-600 text-5xl">
                Vehicula sed ut at.
              </h3>
              <p class="flex py-3 px-9 text-red-600 text-xl">
                Senin
                <span class="px-4">15-12-2021</span>
              </p>
              <h3 class="px-8 mx-auto text-3xl font-bold text-red-600">
                18 : 00 - 23 : 00
              </h3>
            </div>
            <div class="w-full sm:w-1/2 p-8 ">
              <div class="align-middle">
                <h3 class="px-8 line-through md:mt-16 mx-auto text-3xl font-bold text-red-600">
                  Rp.50.000.-
                </h3>
                <p class="py-3 px-8 mx-auto text-black font-bold text-5xl">
                  Rp.20.000.-
                </p>
              </div>
            </div>
            <div class="px-5">
              <p class="mb-4 text-black px-3 justify-content font-serif text-justify">Lorem ipsum dolor sit amet, 
                consectetur adipiscing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, 
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                Excepteur sint occaecat cupidatat non proident, 
                sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
              <p class="mb-4 text-black px-3 justify-content font-serif text-justify">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, 
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu 
                fugiat nulla pariatur. 
                Excepteur sint occaecat cupidatat non proident, 
                sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
              <p class="mb-4 text-black px-3 justify-content font-serif text-justify">
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
                totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae 
                dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, 
                sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro 
                quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non 
                numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim 
                ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid 
                ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam 
                nihil molestiae consequatur, 
                vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
              </p>
              <div class="py-3 text-right">
                <button class="ml-2 h-10 w-60 bg-green-600 rounded text-white">
                    Booking Ticket
                </button>
            </div>
            </div>
          </div> 
        </div>
   `  </div>
    </section>
    
    <footer class="bg-white">
      <div class="py-3">
        <div class="container mx-auto py-4 flex flex-wrap flex-col sm:flex-row">
          <div class="flex items-center space-x-1 p-2">
            <button class="relative z-10 w-8 h-8">
                <img class="" src="{{ asset('Admin/dist/img/Indramayu.png') }}">
            </button>
            <a href="#" class="text-black no-underline hover:no-underline font-sans text-2xl lg:text-2xl">
              Mahardika Ticket
            </a>
          </div>
          <span class="inline-flex sm:ml-auto sm:mt-0 justify-center mt-2 sm:justify-start text-sm">
            <h5 href="" class="mt-2 text-gray-500">
              © PT. Mahardika Solusi Teknologi. 2020.
              <p>We love our users!</p>
            </h5>
          </span>
        </div>
      </div>
    </footer>

    <!-- <a href="#" class="back-to-top w-10 h-10 fixed bottom-0 right-0 mb-5 mr-5 flex items-center justify-center rounded-full bg-blue-600 text-white text-lg z-20 duration-300 hover:bg-blue-400">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd" />
      </svg>
    </a> -->
    
  </body>
</html>

<script>
  var scrollpos = window.scrollY;
  var navcontent = document.getElementById("nav-content");

  document.addEventListener("scroll", function () {
    /*Apply classes for slide in bar*/
    scrollpos = window.scrollY;

    if (scrollpos > 10) {
      navaction.classList.remove("bg-white");
      navaction.classList.remove("text-gray-800");
      navaction.classList.add("text-white");
      //Use to switch toggleColour colours
      for (var i = 0; i < toToggle.length; i++) {
        toToggle[i].classList.add("text-gray-800");
        toToggle[i].classList.remove("text-white");
      }
      navcontent.classList.remove("bg-gray-100");
      navcontent.classList.add("bg-white");
    } else {
      navaction.classList.add("bg-white");
      navaction.classList.remove("text-white");
      navaction.classList.add("text-gray-800");
      //Use to switch toggleColour colours
      for (var i = 0; i < toToggle.length; i++) {
        toToggle[i].classList.add("text-white");
        toToggle[i].classList.remove("text-gray-800");
      }
      navcontent.classList.remove("bg-white");
      navcontent.classList.add("bg-gray-100");
    }
  });
</script>
<script>
  var navMenuDiv = document.getElementById("nav-content");
  var navMenu = document.getElementById("nav-toggle");

  document.onclick = check;
  function check(e) {
    var target = (e && e.target) || (event && event.srcElement);

    //Nav Menu
    if (!checkParent(target, navMenuDiv)) {
      // click NOT on the menu
      if (checkParent(target, navMenu)) {
        // click on the link
        if (navMenuDiv.classList.contains("hidden")) {
          navMenuDiv.classList.remove("hidden");
        } else {
          navMenuDiv.classList.add("hidden");
        }
      } else {
        // click both outside link and outside menu, hide menu
        navMenuDiv.classList.add("hidden");
      }
    }
  }
  function checkParent(t, elm) {
    while (t.parentNode) {
      if (t == elm) {
        return true;
      }
      t = t.parentNode;
    }
    return false;
  }
</script>