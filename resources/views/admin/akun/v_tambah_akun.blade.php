@extends('layout.index')
@section('title','Tambah Akun')

@section('content')
<form action="/akun/tambah_aksi" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="w-full px-3">
        <div class="md:flex">
            <div class="w-full px-4 py-6 ">
                <div class="mb-1"> <span class="text-sm">Nama</span> <input type="text" class="h-12 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600"> </div>
                <div class="mb-1"> <span class="text-sm">Email</span> <input type="text" class="h-12 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600"> </div>
                <div class="mb-1"> <span class="text-sm">Password</span> <input type="password" class="h-12 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600"> </div>
                <div class="mb-1"> <span class="text-sm text-gray-400">Upload foto format JPG, PNG</span> </div>
                <div class="mb-1"> <span>Upload Foto</span>
                    <div class="relative border-dotted h-32 rounded-lg border-dashed border-2 border-blue-700 bg-gray-100 flex justify-center items-center">
                        <div class="absolute">
                            <div class="flex flex-col items-center"> <i class="fa fa-folder-open fa-3x text-blue-700"></i> <span class="block text-gray-400 font-normal">Attach you files here</span> </div>
                        </div> <input type="file" class="h-full w-full opacity-0" name="">
                    </div>
                </div>
                <div class="mt-3 text-right">
                    <a href="/akun">
                        Cancel
                    </a>
                    <button class="ml-2 h-10 w-32 bg-blue-600 