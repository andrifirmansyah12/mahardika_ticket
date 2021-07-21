<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Konser | Mahardika Ticket</title>
    
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
                <a class="inline-block py-2 px-1 text-black font-bold font-sans no-underline" href="/homepage">Home</a>
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

    <section class="w-full bg-gray-200 bg-cover bg-center rounded-t-lg flex items-center justify-center" style="background-image: url({{ asset('mahardika_ticket/dist/img/img4.jpg') }});">
      <div class="container flex flex-wrap mx-auto px-2 pt-4 pb-12 text-gray-800">
        <h1 class="w-full my-2 mt-16 text-5xl font-extrabold leading-tight text-center text-white">
          Best Seller
        </h1>
        @forelse($film as $data)
        <div class='flex max-w-sm w-70 shadow-2xl rounded-lg overflow-hidden mx-auto'>
          <div class='flex items-center w-full px-2 py-2'>
              <div class='mx-3 w-full'>
                  <div class="flex flex-row mb-6 mt-2">
                    <a class='border-2 transform transition hover:scale-95 duration-300 ease-in-out rounded-md cursor-pointer mb-3' href="/homepage/detail{{ $data->id }}">
                      <img class="rounded" src="{{ url('img-film/' . $data->foto)}}">
                    </a>
                  </div>
              </div>
          </div>
        </div>
        @endforeach
      </div>
    </section>
    
    @foreach ($film as $data)
    <div class="w-full p-7 px-16 bg-gray-200 flex justify-center items-center">
      <article class="sm:grid grid-cols-5 bg-white shadow-sm p-7 relative sm:p-4 rounded-lg lg:col-span-2 mt-4 lg:mt-0 py-4 px-8 shadow focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
        <a class="rounded-md cursor-pointer" href="/homepage/detail{{ $data->id }}"><img src="{{ url('img-film/' . $data->foto)}}" alt="foto" class="w-full rounded-lg"></a>
        <div class="pt-5 space-y-2 self-center sm:pt-0 sm:pl-10 col-span-3">
          <a href="/homepage/detail{{ $data->id }}" class="mx-auto font-bold text-green-600 text-5xl">
            {{ $data->judul }}
          </a>
          <p class="px-1 mx-auto text-black text-red-600">
            {{ $data->hari }}
            <span class="px-4 font-semibold">{{ $data->tanggal }}</span>
          </p>
          <h3 class="px-1 mx-auto text-2xl font-bold text-red-600">
            {{ $data->jam_tayang }}
          </h3>
        </div>
        <div class="justify-self-end mt-2">
          <h3 class="line-through mx-auto text-1xl font-bold text-red-600">
            {{ $data->diskon }}
          </h3>
          <p class="py-1 mx-auto text-black font-bold text-4xl">
            {{ $data->harga }}
          </p>
        </div>
      </article>
    </div>
    @endforeach 
    
    <div class="mb-3 bg-gray-200 text-gray-200">
      {{ $film->links() }}
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