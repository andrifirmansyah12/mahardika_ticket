@extends('layout.index')
@section('title','Tambah Film')

@section('content')

<form action="/ticket/tambah_aksi" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="w-full px-3 bg-white rounded-md border-4 border-yellow-600">
        <div class="px-4 py-6">
            <div class="w-full grid md:grid-cols-2 gap-x-10">
                <div class="mb-1"> 
                    <label class="text-sm" for="judul">
                        Judul
                    </label>
                      <input type="text" class="h-12 px-3 w-full border-black border-2 rounded focus:outline-none focus:border-gray-600" id="judul" name="judul" value="{{old('judul')}}">
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
                    <textarea class="h-12 px-3 w-full border-black border-2 rounded focus:outline-none focus:border-gray-600" id="deskripsi_film" name="deskripsi_film" value="{{old('deskripsi_film')}} cols="30" rows="10"></textarea>
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
                    <input type="text" value="Rp. " class="h-12 px-3 w-full border-black border-2 rounded focus:outline-none focus:border-gray-600" id="harga" name="harga" value="{{old('harga')}}">
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
                    <input type="text" value="Rp. " class="h-12 px-3 w-full border-black border-2 rounded focus:outline-none focus:border-gray-600" id="diskon" name="diskon" value="{{old('diskon')}}">
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
                    <div class="relative">
                        <select class="block appearance-none w-full bg-white border border-black text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="hari" name="hari" value="{{old('hari')}}">
                          <option>Senin</option>
                          <option>Selasa</option>
                          <option>Rabu</option>
                          <option>Kamis</option>
                          <option>Jum'at</option>
                          <option>Sabtu</option>
                          <option>Minggu</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </div>
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
                    <input type="date" class="h-12 px-3 w-full border-black border-2 rounded focus:outline-none focus:border-gray-600" id="tanggal" name="tanggal" value="{{old('tanggal')}}">
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
                    <div class="relative">
                        <select class="block appearance-none w-full bg-white border border-black text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="jam_tayang" name="jam_tayang" value="{{old('jam_tayang')}}">
                          <option>09 : 00 - 11 : 00</option>
                          <option>12 : 00 - 15 : 00</option>
                          <option>16 : 00 - 18 : 00</option>
                          <option>19 : 00 - 21 : 00</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </div>
                    @error('jam_tayang')
                    <div class="bg-red-400 p-2 shadow-sm rounded mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
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
                    <a href="/ticket">
                        Cancel
                    </a>
                    <button type="submit" class="ml-2 h-10 w-32 bg-blue-600 rounded text-white hover:bg-blue-700">
                        Tambah
                    </button>
                </div>
        </div>
    </div>
</form>
@endsection
