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
<body class="max-w-screen-2xl mx-auto leading-normal tracking-normal bg-white text-white" style="font-family: 'Source Sans Pro', sans-serif;">

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
        @foreach ($film as $data)
        <div class='flex max-w-sm w-70 shadow-2xl rounded-lg overflow-hidden mx-auto'>
          <div class='flex items-center w-full px-2 py-2'>
              <div class='mx-3 w-full'>
                  <div class="flex flex-row mb-6 mt-2">
                    <a class='border-2 transform transition hover:scale-95 duration-300 ease-in-out rounded-md cursor-pointer mb-3' href="/ticketkonser/detail{{ $data->id }}">
                      <img class="w-60 h-44 object-cover object-center rounded" src="{{ url('img-film/' . $data->foto)}}">
                    </a>
                  </div>
              </div>
          </div>
        </div>
        @endforeach
      </div>
    </section>
    
    @forelse ($film as $data)
    <div class="w-full p-7 px-16 bg-gray-200 flex justify-center items-center">
      <article class="sm:grid grid-cols-5 bg-white shadow-sm p-7 relative sm:p-4 rounded-lg lg:col-span-2 mt-4 lg:mt-0 py-4 px-8 shadow focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
        <a class="cursor-pointer w-full rounded-lg" href="/ticketkonser/detail{{ $data->id }}"><img class="w-full h-44 object-cover object-center" src="{{ url('img-film/' . $data->foto)}}" alt="foto"></a>
        <div class="pt-5 space-y-2 self-center sm:pt-0 sm:pl-10 col-span-3">
          <a href="/ticketkonser/detail{{ $data->id }}" class="mx-auto font-bold text-green-600 text-3xl md:text-5xl xl:text-5xl">
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
          <p class="py-1 mx-auto text-black font-bold text-2xl md:text-4xl xl:text-4xl">
            {{ $data->harga }}
          </p>
        </div>
      </article>
    </div>
    @empty
    <div class="flex items-center bg-yellow-500 text-white text-sm font-bold px-4 py-3" role="alert">
      <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
      <p>Data Ticket Film Belum Tersedia</p>
    </div>
    @endforelse ($film as $data)
    
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