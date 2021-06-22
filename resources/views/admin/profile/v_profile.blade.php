@extends('layout.index')
@section('title','Profile')

@section('content')

@if (session('pesan'))
  <div class="flex items-center bg-yellow-500 text-white text-sm font-bold px-4 py-3" role="alert">
    <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
    <p>{{session('pesan')}}</p>
  </div>
@endif

    <div class='flex max-w-md overflow-hidden mx-auto'>
        <div class='bg-white flex items-center w-full px-2 py-2'>
            <div class="w-full rounded overflow-hidden">
                <img class="w-full items-center mx-auto" src="" alt="foto">    
                <div class="w-full px-3">
                    <div class="md:flex">
                        <div class="w-full px-4 py-6 ">
                            <div class="mb-1"> 
                                <span>
                                    Unggah Foto Baru
                                </span>
                                <div class="relative border-dotted h-32 rounded-lg border-dashed border-2 border-blue-700 bg-gray-100 flex justify-center items-center">
                                    <div class="absolute">
                                        <div class="flex flex-col items-center"> <i class="fa fa-folder-open fa-3x text-blue-700"></i> <span class="block text-gray-400 font-normal">Attach you files here</span> </div>
                                    </div> <input type="file" value="" class="h-full w-full opacity-50" id="foto" name="foto" value="{{old('foto')}}">
                                </div>
                            </div>
                            <div class="mb-1"> 
                                <label class="text-sm" for="name">
                                    Nama
                                </label>
                                  <input type="text" value="" class="h-12 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600" id="name" name="name" value="{{old('name')}}">
                                  @error('name')
                                  <div class="bg-red-400 p-2 shadow-sm rounded mt-2">
                                      {{ $message }}
                                  </div>
                                    @enderror
                                </div>
                            <div class="mb-1">
                                <label class="text-sm" for="email">
                                    Email
                                </label>
                                <input type="text" value="" class="h-12 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600" id="email" name="email" value="{{old('email')}}">
                                @error('email')
                                <div class="bg-red-400 p-2 shadow-sm rounded mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-1">
                                <label class="text-sm" for="email">
                                    Password
                                </label>
                                <input type="text" value="" class="h-12 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600" id="password" name="password" value="{{old('password')}}">
                                @error('password')
                                <div class="bg-red-400 p-2 shadow-sm rounded mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-1">
                                <label class="text-sm" for="alamat">
                                    Alamat
                                </label>
                                <input type="text" value="" class="h-12 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600" name="alamat" id="alamat" name="alamat" value="{{old('alamat')}}">
                                @error('alamat')
                                <div class="bg-red-400 p-2 shadow-sm rounded mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mt-3 text-right">
                                <button type="submit" class="ml-2 h-10 w-32 bg-blue-600 rounded text-white hover:bg-blue-700">
                                    Ubah
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
