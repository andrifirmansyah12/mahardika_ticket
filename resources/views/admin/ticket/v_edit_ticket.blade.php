@extends('layout.index')
@section('title','Edit Film')

@section('content')

<form action="/ticket/edit_aksi/{{ $film->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="w-full px-3">
        <div class="md:flex">
            <div class="w-full px-4 py-6 ">
                <div class="mb-1"> 
                    <label class="text-sm" for="judul">
                        Judul
                    </label>
                      <input type="text" value="{{$film->judul}}" class="h-12 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600" id="judul" name="judul" value="{{old('judul')}}">
                      @error('judul')
                      <div class="bg-red-400 p-2 shadow-sm rounded mt-2">
                          {{ $message }}
                      </div>
                        @enderror
                    </div>
                <div class="mb-1">
                    <label class="text-sm" for="deskripsi_film">
                        Deskripsi Film
                    </label>
                    <input type="text" value="{{$film->deskripsi_film}}" class="h-12 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600" id="deskripsi_film" name="deskripsi_film">
                    @error('deskripsi_film')
                    <div class="bg-red-400 p-2 shadow-sm rounded mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-1">
                    <label class="text-sm" for="harga">
                        Harga
                    </label>
                    <input type="text" value="{{$film->harga}}" class="h-12 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600" id="harga" name="harga">
                    @error('harga')
                    <div class="bg-red-400 p-2 shadow-sm rounded mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-1">
                    <label class="text-sm" for="diskon">
                        Diskon
                    </label>
                    <input type="text" value="{{$film->diskon}}" class="h-12 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600" id="diskon" name="diskon">
                    @error('diskon')
                    <div class="bg-red-400 p-2 shadow-sm rounded mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-1">
                    <label class="text-sm" for="hari">
                        Hari
                    </label>
                    <input type="text" value="{{$film->hari}}" class="h-12 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600" id="hari" name="hari">
                    @error('hari')
                    <div class="bg-red-400 p-2 shadow-sm rounded mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-1">
                    <label class="text-sm" for="tanggal">
                        Tanggal
                    </label>
                    <input type="date" value="{{$film->tanggal}}" class="h-12 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600" id="tanggal" name="tanggal"">
                    @error('tanggal')
                    <div class="bg-red-400 p-2 shadow-sm rounded mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-1">
                    <label class="text-sm" for="jam_tayang">
                        Jam Tayang
                    </label>
                    <input type="text" value="{{$film->jam_tayang}}" class="h-12 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600" id="jam_tayang" name="jam_tayang"">
                    @error('jam_tayang')
                    <div class="bg-red-400 p-2 shadow-sm rounded mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-1"> 
                    <span class="text-sm text-gray-400">
                        Format foto PNG, JPG .
                    </span> 
                </div>
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
                    <a href="/ticket">
                        Cancel
                    </a>
                    <button type="submit" class="ml-2 h-10 w-32 bg-blue-600 rounded text-white hover:bg-blue-700">
                        Tambah
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
