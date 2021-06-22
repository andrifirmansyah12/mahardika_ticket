<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page | Mahardika Ticket</title>
    
    <!-- Header -->
    @component("components.header_page")
    @endcomponent

</head>
<body class="leading-normal tracking-normal bg-white text-white" style="font-family: 'Source Sans Pro', sans-serif;">

    <!-- Nav -->
    @component("components.nav_page")
    @endcomponent

    <section class="w-full" style="background-image: url({{ asset('mahardika_ticket/dist/img/img6.jpg') }});">
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
      <article class="sm:grid grid-cols-5 bg-white shadow-sm p-7 relative sm:p-4 rounded-lg lg:col-span-2 ">
        <a class="transform transition hover:scale-95 duration-300 ease-in-out rounded-md cursor-pointer" href="/homepage/detail{{ $data->id }}"><img src="{{ url('img-film/' . $data->foto)}}" alt="foto" class="w-full rounded-lg"></a>
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