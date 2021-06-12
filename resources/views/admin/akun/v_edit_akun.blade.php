@extends('layout.index')
@section('title','Edit Akun')

@section('content')

<form action="/akun/edit_aksi/{{ $akun->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="w-full px-3">
        <div class="md:flex">
            <div class="w-full px-4 py-6 ">
                <div class="mb-1"> 
                    <label class="text-sm" for="name">
                        Nama
                    </label>
                      <input type="text" value="{{$akun->name}}" class="h-12 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600" id="name" name="name" value="{{old('name')}}">
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
                    <input type="text" value="{{$akun->email}}" class="h-12 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600" id="email" name="email" value="{{old('email')}}">
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
                    <input type="text" value="{{$akun->password}}" class="h-12 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600" id="password" name="password" value="{{old('password')}}">
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
                    <input type="text" value="{{$akun->alamat}}" class="h-12 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600" name="alamat" id="alamat" name="alamat" value="{{old('alamat')}}">
                    @error('alamat')
                    <div class="bg-red-400 p-2 shadow-sm rounded mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-1"> 
                    <span class="text-sm text-gray-400">
                        Format foto PNG, JPG .
                    </span> </div>
                <div class="mb-1"> 
                    <span>
                        Unggah Foto
                    </span>
                    <div class="relative border-dotted h-32 rounded-lg border-dashed border-2 border-blue-700 bg-gray-100 flex justify-center items-center">
                        <div class="absolute">
                            <div class="flex flex-col items-center"> <i class="fa fa-folder-open fa-3x text-blue-700"></i> <span class="block text-gray-400 font-normal">Attach you files here</span> </div>
                        </div> <input type="file" class="h-full w-full opacity-50" id="foto" name="foto" value="{{old('foto')}}">
                    </div>
                </div>
                <div class="mt-3 text-right">
                    <a href="/akun">
                        Cancel
                    </a>
                    <button type="submit" class="ml-2 h-10 w-32 bg-blue-600 rounded text-white hover:bg-blue-700">
                        Edit
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
