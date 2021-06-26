@extends('layout.index')
@section('title','Detail Akun')

@section('content')

{{-- Forms --}}
<div class="flex flex-col">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
        <body class="font-nunito antialiased bg-gray-100 text-gray-900 my-16 flex items-center justify-center">
            <div class="bg-white border-2 border-gray-200 container mx-auto px-4 sm:px-8 max-w-3xl">
                <div class="main-images py-3 ">
                    <div class="images grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div class="image border-2 border-gray-200 bg-white items-center rounded-lg shadow-lg overflow-hidden">
                                <img class="" src="{{ url('img-akun/' . $akun->foto)}}" alt="foto">
                        </div>
                    </div>
                </div>
                <div class="main-question mb-8 flex flex-col divide-y text-gray-800 text-base">
                    <div class="item px-6 py-6">
                        <h4 class="font-bold">
                            Nama : 
                            <span class="px-2 inline-flex text-sm leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                {{ $akun->name}}
                            </span>
                        </h4>
                    </div>
                    <div class="item px-6 py-6">
                        <h4 class="font-bold">
                            Email : 
                            <span class="px-2 inline-flex text-sm leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                {{ $akun->email}}
                            </span>
                        </h4>
                    </div>
                    <div class="item px-6 py-6">
                        <h4 class="font-bold">
                            Password :
                            <span class="px-2 inline-flex text-sm leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                {{ $akun->password}}
                            </span>
                        </h4>
                    </div>
                    <div class="item px-6 py-6">
                        <h4 class="font-bold">
                            Alamat : 
                            <span class="px-2 inline-flex text-sm leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                {{ $akun->alamat}}
                            </span>
                        </h4>
                    </div>
                    <div class="flex flex-col bg-white px-8 py-3 items-end">
                        <a class="rounded-full hover:underline focus:outline-none transform transition hover:scale-105 duration-300 ease-in-out px-4 py-4 bg-gray-600 rounded-md text-white text-sm focus:border-transparent" href="/akun">Kembali</a>
                    </div>
                </div>
            </div>
        </body>
    </div>
</div>

@endsection