<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri | Mahardika Ticket</title>
    
    <!-- Header -->
    @component("components.header_page")
    @endcomponent

</head>
<body class="max-w-screen-2xl mx-auto leading-normal tracking-normal bg-white text-white" style="font-family: 'Source Sans Pro', sans-serif;">

    <!-- Nav -->
    @component("components.nav_page")
    @section('nav')
        <div class="block lg:hidden pr-4">
            <button id="nav-toggle" class="flex items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
              <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <title>Menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
              </svg>
            </button>
          </div>
          <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-white lg:bg-transparent text-blue-ticket p-4 lg:p-0 z-20" id="nav-content">
            <ul class="list-reset lg:flex justify-end flex-1 items-center">
              <li class="mr-3">
                <a class="font-lato inline-block py-2 px-1 text-blue-ticket font-bold font-sans no-underline" href="/homepage">Home</a>
              </li>
              <li class="mr-3">
                <a class="font-lato inline-block text-blue-ticket no-underline font-sans hover:text-gray-800 hover:text-underline py-2 px-1" href="/aboutus">About Us</a>
              </li>
              <li class="mr-3">
                <a class="font-lato inline-block text-blue-ticket no-underline font-sans hover:text-gray-800 hover:text-underline py-2 px-1" href="/contact">Contact</a>
              </li>
            </ul>
          </div>
        @endsection
    @endcomponent

    <!-- component -->
    <!-- Create By Joker Banny -->
    <div class="flex flex-col gap-y-10 bg-blue-ticket flex justify-center items-center py-20">
        <div class="pt-8 flex items-center justify-center">
            <h1 class="text-white font-lato text-5xl font-bold">GALERI</h1>
        </div>
        <div class="container mx-auto p-12 bg-gray-100 rounded-xl">
            <h1 class="text-4xl uppercase text-blue-ticket font-lato font-bold from-current mb-8">TEAM WORK</h1>
            <!-- Box-1 -->
            <div class="sm:grid sm:grid-cols-2 lg:grid-cols-3 gap-4 space-y-4 sm:space-y-0">
                <div class="bg-white">
                <div>
                    <div class="shadow-lg hover:shadow-xl transform transition duration-500 hover:scale-105">
                        <div>
                            <img class="w-full h-72 object-cover object-center" src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=751&q=80" />
                            {{-- <div class="px-4 py-2">
                            <h1 class="text-xl font-gray-700 font-bold">Papież gigant</h1>
                            <div class="flex space-x-2 mt-2">
                                <span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                </span>
                                <h3 class="text-lg text-gray-600 font-semibold mb-2">New York</h3>
                            </div>
                            <p class="text-sm tracking-normal">Częstochowski pomnik Jana Pawła II wyjątkowo interesująco wpisuje się w poprzemysłowy krajobraz tego miasta o mocnych lewicowych, robotniczych i socjalistycznych tradycjach. Powstały w 2013 roku, uchodzi za najwyższego Karola Wojtyłę w Polsce.</p>
                            <button class="mt-12 w-full text-center bg-yellow-400 py-2 rounded-lg">Read more</button>
                            </div> --}}
                        </div>
                    </div>
                </div>
                </div>
                <!-- Box-2 -->
                <div class="bg-white">
                <div>
                    <div class="shadow-lg hover:shadow-xl transform transition duration-500 hover:scale-105">
                        <div>
                            <img class="w-full h-72 object-cover object-center" src="https://images.unsplash.com/photo-1530099486328-e021101a494a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=816&q=80" />
                        </div>
                    </div>
                </div>
                </div>
                <!-- Box-3 -->
                <div class="bg-white">
                <div>
                    <div class="shadow-lg hover:shadow-xl transform transition duration-500 hover:scale-105">
                        <div>
                            <img class="w-full h-72 object-cover object-center" src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" />
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="container mx-auto p-12 bg-gray-100 rounded-xl">
            <h1 class="text-4xl uppercase text-blue-ticket font-lato font-bold from-current mb-8">PEOPLE</h1>
            <!-- Box-1 -->
            <div class="sm:grid sm:grid-cols-2 lg:grid-cols-3 gap-4 space-y-4 sm:space-y-0">
                <div class="bg-white">
                <div>
                    <div class="shadow-lg hover:shadow-xl transform transition duration-500 hover:scale-105">
                        <div>
                            <img class="w-full h-72 object-cover object-center" src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=751&q=80" />
                            {{-- <div class="px-4 py-2">
                            <h1 class="text-xl font-gray-700 font-bold">Papież gigant</h1>
                            <div class="flex space-x-2 mt-2">
                                <span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                </span>
                                <h3 class="text-lg text-gray-600 font-semibold mb-2">New York</h3>
                            </div>
                            <p class="text-sm tracking-normal">Częstochowski pomnik Jana Pawła II wyjątkowo interesująco wpisuje się w poprzemysłowy krajobraz tego miasta o mocnych lewicowych, robotniczych i socjalistycznych tradycjach. Powstały w 2013 roku, uchodzi za najwyższego Karola Wojtyłę w Polsce.</p>
                            <button class="mt-12 w-full text-center bg-yellow-400 py-2 rounded-lg">Read more</button>
                            </div> --}}
                        </div>
                    </div>
                </div>
                </div>
                <!-- Box-2 -->
                <div class="bg-white">
                <div>
                    <div class="shadow-lg hover:shadow-xl transform transition duration-500 hover:scale-105">
                        <div>
                            <img class="w-full h-72 object-cover object-center" src="https://images.unsplash.com/photo-1530099486328-e021101a494a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=816&q=80" />
                        </div>
                    </div>
                </div>
                </div>
                <!-- Box-3 -->
                <div class="bg-white">
                <div>
                    <div class="shadow-lg hover:shadow-xl transform transition duration-500 hover:scale-105">
                        <div>
                            <img class="w-full h-72 object-cover object-center" src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" />
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    @component("components.footer_page")
    @endcomponent

    <a href="#" class="back-to-top w-10 h-10 fixed bottom-0 right-0 mb-5 mr-5 flex items-center justify-center rounded-full bg-blue-600 text-white text-lg z-20 duration-300 hover:bg-blue-400">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd" />
      </svg>
    </a>

    <script src="https://unpkg.com/popper.js@1/dist/umd/popper.min.js"></script>
	  <script src="https://unpkg.com/tippy.js@4"></script>
    <script>
        tippy('.link',{
        placement: 'bottom'
      })

      window.onload = function(){
        document.getElementById('close').onclick = function(){
        this.parentNode.parentNode.parentNode
        .removeChild(this.parentNode.parentNode);
        return false;
          };
      };
    </script>

  </body>
</html>

<!-- Footer JS -->
@component("components.footerJS_page")
@endcomponent