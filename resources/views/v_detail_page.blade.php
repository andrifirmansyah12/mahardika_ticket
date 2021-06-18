<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Page | Mahardika Ticket</title>

    <!-- Header -->
    @component("components.header_page")
    @endcomponent

</head>
<body class="leading-normal tracking-normal bg-white text-white" style="font-family: 'Source Sans Pro', sans-serif;">

    <!-- Nav -->
    @component("components.nav_page")
    @endcomponent

    <section class="bg-gray-200">
      <div class="px-10 mb-6 py-4">
        <div class="rounded-md bg-white mt-20">
          <div class="w-full">
            <img src="{{ url('img-film/' . $film->foto)}}" width="1920" height="288" class="w-full object-cover rounded-md block mx-auto sm:block sm:w-full"></img>
          </div>
          <div class="flex flex-wrap">
            <div class="w-5/6 sm:w-1/2 p-8">
              <h3 class="px-8 md:mt-16 mx-auto font-bold text-green-600 text-5xl">
                {{ $film->judul }}
              </h3>
              <p class="flex py-3 px-9 text-red-600 text-xl">
                {{ $film->hari }}
                <span class="px-4">{{ $film->tanggal }}</span>
              </p>
              <h3 class="px-8 mx-auto text-3xl font-bold text-red-600">
                {{ $film->jam_tayang }}
              </h3>
            </div>
            <div class="w-full sm:w-1/2 p-8 ">
              <div class="align-middle">
                <h3 class="px-8 line-through md:mt-16 mx-auto text-3xl font-bold text-red-600">
                  {{ $film->diskon }}
                </h3>
                <p class="py-3 px-8 mx-auto text-black font-bold text-5xl">
                  {{ $film->harga }}
                </p>
              </div>
            </div>
            <div class="px-5">
              <p class="mb-4 text-black px-3 justify-content font-serif text-justify">
                {{ $film->deskripsi_film }}
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