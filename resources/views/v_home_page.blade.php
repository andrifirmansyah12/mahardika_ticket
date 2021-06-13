<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page | Mahardika Ticket</title>
    <link rel="stylesheet" href="{{ asset('Admin/dist/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('Admin/dist/img/Indramayu.png') }}">
    <style>
      html{
        scroll-behavior: smooth;
      }
    </style>
</head>
<body class="leading-normal tracking-normal bg-white text-white" style="font-family: 'Source Sans Pro', sans-serif;">

    <!-- Nav -->
    @component("components.nav_page")
    @endcomponent

    @component("components.isi_page")
    @forelse ($film as $data)
    @section('isi')
    <div class='mx-3 w-full'>
      <a href="/homepage/detail{{ $data->id }}"><div class='border-2 transform transition hover:scale-95 duration-300 ease-in-out rounded-md cursor-pointer mb-3'><img class="rounded" src="{{ url('img-film/' . $data->foto)}}">
      </div>
      </a>
    </div>
    @endsection

    @section('isi2')
    <a class="transform transition hover:scale-95 duration-300 ease-in-out rounded-md cursor-pointer" href="/homepage/detail{{ $data->id }}"><img src="{{ url('img-film/' . $data->foto)}}" alt="foto" class="w-full rounded-lg"></a>
    <div class="pt-5 space-y-2 self-center sm:pt-0 sm:pl-10 col-span-3">
      <a href="/homepage/detail{id}" class="mx-auto font-bold text-green-600 text-5xl">
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
    @endsection
    @empty
    <h1 class="text-center text-gray-600" >
      Data Aparatur Desa Kosong
    </h1>
    @endforelse
    @endcomponent

    
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