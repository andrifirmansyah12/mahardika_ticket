@extends('layout.index')
@section('title','Ticket Film')

@section('content')

<div class="mb-1">
  <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
    <a href="/ticket/tambah">Tambah</a>
  </button>
</div>

{{-- Forms --}}
<div class="flex flex-col">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  No
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Gambar
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Judul
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Deskripsi Film
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Harga
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Diskon
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Hari/Tanggal
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Jam Tayang
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Aksi
                </th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              <?php $no=1; ?>
              @foreach ($film as $data)
              <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  {{$no++}}
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="flex items-center">
                    <div class="flex-shrink-0 h-10 w-10">
                      <img class="h-10 w-10 rounded-full" src="{{ url('img-film/' . $data->foto)}}" alt="foto">
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="text-sm text-gray-900">{{$data->judul}}</div>
                </td>
                <td class="px-6 py-4">
                  <!--Open modal button-->
                  <div>    
                    <button id="buttonmodal" class="focus:outline-none p-2 text-sm bg-purple-600 text-black rounded-lg hover:text-white" type="button">Lihat</button>
                  </div>

                  <div id="modal"
                    class="fixed top-0 left-0 w-screen h-screen flex items-center justify-center transform scale-0 transition-transform duration-300">
                    <!-- Modal content -->
                    <div class="bg-white w-1/2 h-1/2 p-12">
                        <!--Close modal button-->
                        <button id="closebutton" type="button" class="focus:outline-none">
                            <!-- Hero icon - close button -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </button>
                        <!-- Test content -->
                        <h1 class="text-center text-2xl font-bold">
                          Deskripsi Film
                        </h1>
                        <p class="py-3">
                          {{$data->deskripsi_film}}
                        </p>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="text-sm text-gray-900">{{$data->harga}}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="text-sm text-gray-900">{{$data->diskon}}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="text-sm text-gray-900">{{$data->hari}}, {{$data->tanggal}}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  {{$data->jam_tayang}}
                </td>
                <td class="py-4 whitespace-nowrap space-x-1 text-sm font-medium px-3">
                  <a href="/ticket/edit/{{ $data->id }}" class="rounded-xl bg-green-600 p-3 hover:text-white">Edit</a>
                  <a href="/ticket/hapus/{{ $data->id }}" class="rounded-xl bg-red-600 p-3 hover:text-white">Hapus</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

@endsection