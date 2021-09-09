<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Mahardika Ticket</title>

    <!-- Header -->
    @component("components.header_page")
    @endcomponent

</head>
<body class="max-w-screen-2xl mx-auto leading-normal tracking-normal bg-white text-white" style="font-family: 'Source Sans Pro', sans-serif;">

  <div class="preloader bg-white">
    <div class="loading">
      <img src="{{ asset('mahardika_ticket/img/tenor.png') }}" width="80">
      <p class="text-blue-ticket font-lato font-bold py-2">Harap Tunggu</p>
    </div>
  </div>

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
                <a class="inline-block text-blue-ticket no-underline font-lato hover:text-gray-800 hover:text-underline py-2 px-1" href="/homepage">Home</a>
              </li>
              <li class="mr-3">
                <a class="inline-block py-2 px-1 text-blue-ticket font-bold font-lato no-underline" href="/aboutus">About Us</a>
              </li>
              <li class="mr-3">
                <a class="inline-block no-underline text-blue-ticket font-lato hover:text-gray-800 hover:text-underline py-2 px-1" href="/contact">Contact</a>
              </li>
              <li class="mr-3">
                {{-- <a class="inline-block text-black no-underline font-sans hover:text-gray-800 hover:text-underline py-2 px-1" href="/latihan">Latihan</a> --}}
              </li>
            </ul>
          </div>
        @endsection
    @endcomponent

    <div class="bg-white">
      <div class="container mx-auto items-center">
          <div class="mt-14">
              <div class="p-8 space-y-3">
                  <div class="shadow-md rounded-lg bg-white">
                      <div class="w-full text-center py-3">
                          <p class="text-sm tracking-widest font-bold font-lato text-5xl text-blue-ticket pt-3">
                            About Us
                          </p>
                      </div>
                      <div class="w-full mb-4">
                          <div class="h-1 mx-auto bg-gray-600 w-1/6 opacity-25 my-0 py-0 rounded-t"></div>
                      </div>
                      <div class="mt-8 container">
                        <div class="bg-white text-gray-700 rounded text-center border-2 border-gray-200">
                          <div class="flex justify-center py-2">
                              <div class="bg-blue-ticket rounded-full h-16 w-16 -mt-8 flex items-center justify-center">
                                  <i class="fas fa-info text-white text-3xl">
                                  </i>
                              </div>
                          </div>
                          <div class="mt-6">
                              <h1 class="text-3xl font-lato text-blue-ticket font-bold">
                                Mahardika Ticket
                              </h1>
                              <div class="p-3 mx-6">
                                <p class="mt-1 font-lato text-blue-ticket text-md text-justify">
                                  Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                  when an unknown printer took a galley of type and scrambled it
                                  to make a type specimen book. It has survived not only five centuries,
                                  but also the leap into electronic typesetting, remaining essentially
                                  unchanged. It was popularised in the 1960s with the release of Letraset
                                  sheets containing Lorem Ipsum passages, and more recently with desktop
                                  publishing software like Aldus PageMaker including versions of Lorem Ipsum.    
                                </p>
                              </div>
                          </div>
                          <a href="/contact" class="no-underline">
                              <div class="mt-8 p-2 bg-blue-ticket text-white font-bold hover:opacity-90 hover:text-gray-700"> 
                                Contact Support
                              </div>
                          </a>
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
    
  </body>
</html>

<!-- Footer JS -->
@component("components.footerJS_page")
@endcomponent