<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Ticket | Mahardika Ticket</title>

    <!-- Header -->
    @component("components.header_page")
    @endcomponent

</head>
<body class="leading-normal tracking-normal bg-white text-white" style="font-family: 'Source Sans Pro', sans-serif;">

  <div class="preloader bg-white">
    <div class="loading">
      <img src="{{ asset('mahardika_ticket/img/tenor.png') }}" width="80">
      <p class="text-gray-600 font-bold py-2">Harap Tunggu</p>
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
        <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20" id="nav-content">
          <ul class="list-reset lg:flex justify-end flex-1 items-center">
            <li class="mr-3">
              <a class="inline-block text-black no-underline font-sans hover:text-gray-800 hover:text-underline py-2 px-1" href="/homepage">Home</a>
            </li>
            <li class="mr-3">
              <a class="inline-block text-black no-underline font-sans hover:text-gray-800 hover:text-underline py-2 px-1" href="/aboutus">About Us</a>
            </li>
            <li class="mr-3">
              <a class="inline-block text-black no-underline font-sans hover:text-gray-800 hover:text-underline py-2 px-1" href="/contact">Contact</a>
            </li>
          </ul>
        </div>
      @endsection
    @endcomponent
        
    <section class="bg-white rounded-md shadow mt-24 mx-4 md:mx-10">
      <div class="mb-8">
        <div class="rounded-md bg-white">
          <div class="w-full">
            <img src="{{ url('img-film/' . $film->foto)}}" class="w-full h-96 object-center object-cover rounded-md block mx-auto sm:block sm:w-full"></img>
          </div>
          <div class="flex flex-wrap">
            <div class="w-5/6 sm:w-1/2 pl-8 pt-8 md:pt-0 md:p-0">
              <h3 class="px-0 md:px-8 xl:px-8 md:mt-16 mx-auto font-bold text-green-600 text-3xl md:text-5xl xl:text-5xl">
                {{ $film->judul }}
              </h3>
              <p class="flex py-3 px-0 md:px-9 xl:px-9 text-red-600 text:md md:text-xl xl:text-xl">
                {{ $film->hari }}
                <span class="px-4">{{ $film->tanggal }}</span>
              </p>
              <h3 class="px-0 md:px-8 xl:px-8 mx-auto text-2xl md:text-3xl xl:text-3xl font-bold text-red-600">
                {{ $film->jam_tayang }}
              </h3>
            </div>
            <div class="w-full flex items-center justify-start md:justify-end sm:w-1/2 p-8 ">
              <div class="align-middle">
                <h3 class="px-0 md:px-8 xl:px-8 line-through md:mt-16 mx-auto text-2xl md:text-3xl xl:text-3xl font-bold text-red-600">
                  {{ $film->diskon }}
                </h3>
                <p class="py-3 px-0 md:px-8 xl:px-8 mx-auto text-black font-bold text-3xl md:text-4xl xl:text-5xl">
                  {{ $film->harga }}
                </p>
              </div>
            </div>
            <div class="px-5">
              <p class="mb-4 font-lato text-black px-3 justify-content font-serif text-justify">
                {{ $film->deskripsi_film }}
              </p>
              <div class="py-3 text-right">
                <button class="mr-3 h-10 w-60 bg-green-600 rounded text-white">
                    Booking Ticket
                </button>
            </div>
            </div>
          </div> 
        </div>
   `  </div>
    </section>
    
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