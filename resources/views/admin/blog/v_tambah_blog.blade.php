@extends('layout.index')
@section('title','Tambah Blog')

@section('content')

<form action="/blog/tambah_aksi" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="w-full px-3 bg-white rounded-md border-4 border-yellow-600">
        <div class="md:flex">
            <div class="w-full px-4 py-6 ">
                <div class="mb-1"> 
                    <label class="text-sm" for="judul">
                        Judul
                    </label>
                      <input type="text" class="h-12 px-3 w-full border-black border-2 rounded focus:outline-none focus:border-gray-600" id="judul" name="judul" value="{{old('judul')}}" required>
                      @error('judul')
                      <div class="bg-red-400 p-2 shadow-sm rounded mt-2">
                          {{ $message }}
                      </div>
                        @enderror
                    </div>
                <div class="mb-1">
                    <label class="text-sm" for="nama_tempat">
                        Nama Tempat
                    </label>
                    <input type="text" class="h-12 px-3 w-full border-black border-2 rounded focus:outline-none focus:border-gray-600" id="nama_tempat" name="nama_tempat" value="{{old('nama_tempat')}}" required>
                    @error('nama_tempat')
                    <div class="bg-red-400 p-2 shadow-sm rounded mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-1">
                    <label class="text-sm" for="tanggal">
                        Tanggal
                    </label>
                    <input type="date" class="py-3 px-3 form-textarea block w-full border-black border-2 rounded focus:outline-none focus:border-gray-600" id="tanggal" name="tanggal" value="{{old('tanggal')}}"rows="8" required></input>
                    @error('tanggal')
                    <div class="bg-red-400 p-2 shadow-sm rounded mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-1">
                    <label class="text-sm" for="deskripsi">
                        Deskripsi
                    </label>
                    <textarea class="py-3 px-3 form-textarea block w-full border-black border-2 rounded focus:outline-none focus:border-gray-600" id="deskripsi" name="deskripsi" value="{{old('deskripsi')}}"rows="8" required></textarea>
                    @error('deskripsi')
                    <div class="bg-red-400 p-2 shadow-sm rounded mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-1"> 
                    <span>
                        Unggah Foto
                    </span>
                    <div class="mb-1"> 
                        <span class="text-sm text-gray-400">
                            Format foto PNG, JPG .
                        </span> 
                    </div>
                    <div class="relative border-dotted h-32 rounded-lg border-dashed border-2 border-black bg-gray-100 flex justify-center items-center">
                        <div class="absolute">
                            <div class="flex flex-col items-center"> <i class="fa fa-folder-open fa-3x text-yellow-700"></i> <span class="block text-gray-400 font-normal">Attach you files here</span> </div>
                        </div> <input type="file" class="h-full w-full opacity-50" id="foto" name="foto" value="{{old('foto')}}">
                    </div>
                </div>
                <div class="mt-3 text-right">
                    <a href="/blog">
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
