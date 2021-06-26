@extends('layout.index')
@section('title','Profile')

@section('content')

@if (session('pesan'))
  <div class="flex items-center bg-yellow-500 text-white text-sm font-bold px-4 py-3" role="alert">
    <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
    <p>{{session('pesan')}}</p>
  </div>
@endif

    {{-- Forms --}}
<div class="flex flex-col bg-white container border-2 border-gray-200">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8 ">
        <body class="font-nunito antialiased bg-gray-100 text-gray-900 my-16 flex items-center justify-center">
            <div class="bg-white container mx-auto px-4 sm:px-8 max-w-3xl">
                <div class="main-images py-3 ">
                    <div class="images grid grid-cols-1 md:grid-cols-3 gap-8">
                    </div>
                </div>
                <div class="main-question mb-8 flex flex-col divide-y text-gray-800 text-base">
                    <div class="item px-6 py-6">
                        <h4 class="font-bold">
                            Nama : 
                            <span class="px-2 inline-flex text-sm leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                {{ Auth::user()->name }}
                            </span>
                        </h4>
                    </div>
                    <div class="item px-6 py-6">
                        <h4 class="font-bold">
                            Email : 
                            <span class="px-2 inline-flex text-sm leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                {{ Auth::user()->email }}
                            </span>
                        </h4>
                    </div>
                    <div class="item px-6 py-6">
                        <h4 class="font-bold">
                            Password :
                            <span class="px-2 inline-flex text-sm leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                {{ Auth::user()->password }}
                            </span>
                        </h4>
                    </div>
                    <div class="item px-6 py-6">
                        <h4 class="font-bold">
                            Alamat : 
                            <span class="px-2 inline-flex text-sm leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                {{ Auth::user()->alamat }}
                            </span>
                        </h4>
                    </div>
                    <div class="flex flex-col bg-white px-8 py-3 items-end">
                        <a class="rounded-full hover:underline focus:outline-none transform transition hover:scale-105 duration-300 ease-in-out px-4 py-4 bg-gray-600 rounded-md text-white text-sm focus:border-transparent" href="/password/reset">Ganti Password</a>
                    </div>
                </div>
            </div>
        </body>
    </div>
</div>


@endsection
