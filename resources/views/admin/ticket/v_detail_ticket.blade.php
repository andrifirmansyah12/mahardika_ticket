@extends('layout.index')
@section('title','Detail Ticket Film')

@section('content')

{{-- Forms --}}
<div class="flex flex-col container bg-white border-2 border-gray-200">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
        <body class="font-nunito antialiased bg-gray-100 text-gray-900 my-16 flex items-center justify-center">
            <div class="bg-white container mx-auto px-4 sm:px-8 max-w-3xl">
                <div class="main-images py-3">
                    <div class="images md:grid-cols-3 gap-8">
                        <div class="px-3 mt-5 image items-center overflow-hidden">
                            <img class="w-24 h-24 p-1 justify-center object-cover rounded-full border-2 border-indigo-500" src="{{ url('img-film/' . $film->foto)}}" alt="foto">
                        </div>
                    </div>
                </div>
                <div class="main-question mb-8 flex flex-col divide-y text-gray-800 text-base">
                    <div class="item px-6 py-6">
                        <h4 class="font-bold">
                            Judul : 
                            <span class="px-2 inline-flex text-sm leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                {{ $film->judul}}
                            </span>
                        </h4>
                    </div>
                    <div class="item px-6 py-6">
                        <h4 class="font-bold">
                            Deskripsi : 
                            <span class="px-2 inline-flex text-sm leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                {{ $film->deskripsi_film}}
                            </span>
                        </h4>
                    </div>
                    <div class="item px-6 py-6">
                        <h4 class="font-bold">
                            Harga :
                            <span class="px-2 inline-flex text-sm leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                {{ $film->harga}}
                            </span>
                        </h4>
                    </div>
                    <div class="item px-6 py-6">
                        <h4 class="font-bold">
                            Diskon : 
                            <span class="px-2 inline-flex text-sm leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                {{ $film->diskon}}
                            </span>
                        </h4>
                    </div>
                    <div class="item px-6 py-6">
                        <h4 class="font-bold">
                            Hari/Tanggal : 
                            <span class="px-2 inline-flex text-sm leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                {{ $film->hari}},{{ $film->tanggal}}
                            </span>
                        </h4>
                    </div>
                    <div class="item px-6 py-6">
                        <h4 class="font-bold">
                            Jam Tayang : 
                            <span class="px-2 inline-flex text-sm leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                {{ $film->jam_tayang}}
                            </span>
                        </h4>
                    </div>
                    <div class="flex flex-col bg-white px-8 py-3 items-end">
                        <a class="rounded-full hover:underline focus:outline-none transform transition hover:scale-105 duration-300 ease-in-out px-4 py-4 bg-gray-600 rounded-md text-white text-sm focus:border-transparent" href="/ticket">Kembali</a>
                    </div>
                </div>
            </div>
        </body>
    </div>
</div>

@endsection