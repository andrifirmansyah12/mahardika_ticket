@extends('layout.index')
@section('title','Ticket Film')

@section('content')
<div class="">
  <div class="flex items-center justify-between">
    <div class="">
      <a class="bg-blue-500 hover:bg-blue-700 text-white p-2 text-sm font-bold rounded" href="/ticket/tambah">Tambah</a>
    </div>
    <div class="mt-2">
      <form action="{{ url()->current() }}"
        method="get">
        <div class="mx-auto flex items-center justfy-center">
          <input type="search"
            name="keyword"
            value="{{ request('keyword') }}"
            placeholder="Search ....."
            class="block w-full py-3 pl-4 pr-10 text-sm leading-5 rounded-full shadow-sm">
          <button type="submit"
            class="relative inline-flex right-10 items-center px-2 py-2 ml-1 mr-2 text-sm focus:outline-none">
            <svg class="w-5 h-5 text-gray-500 transition dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 disabled:opacity-25"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 20 20"
              fill="currentColor">
              <path fill-rule="evenodd"
                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                clip-rule="evenodd" />
            </svg>
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

@if (session('pesan'))
  <div class="flex items-center bg-green-900 text-white text-sm font-bold px-4 py-3" role="alert">
    <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
    <p>{{session('pesan')}}</p>
  </div>
@endif

{{-- Forms --}}
<div class="flex flex-col">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-t-lg">
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
              @forelse ($film as $data)
              <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  {{ ++$i }}
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
                  <div class="text-sm w-32 text-gray-900 overflow-hidden overflow-ellipsis whitespace-nowrap">{{$data->deskripsi_film}}</div>
                  {{-- <!--Open modal button-->
                  <div>    
                    <button id="buttonmodal" data-toggle="modal" data-target="#detail{{ $data->id }}" class="focus:outline-none p-2 text-sm bg-purple-600 text-black rounded-lg hover:text-white" type="button">
                      Lihat
                    </button>
                  </div> --}}
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
                  <a href="/ticket/detailticket/{{ $data->id }}" class="rounded-xl bg-yellow-300 p-3 hover:text-white">Detail</a>
                  <a href="/ticket/edit/{{ $data->id }}" class="rounded-xl bg-green-600 p-3 hover:text-white">Edit</a>
                  <a href="/ticket/hapus/{{ $data->id }}" class="rounded-xl bg-red-600 p-3 hover:text-white">Hapus</a>
                </td>
              </tr>
              @empty
              <div class="flex items-center bg-yellow-500 text-white text-sm font-bold px-4 py-3" role="alert">
                <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
                <p>Data Ticket Belum Tersedia</p>
              </div>
              @endforelse ($blog as $data)
            </tbody>
          </table>
        </div>
        <div class="border-blue-ticket rounded-b-lg border bg-white shadow">
          {{ $film->links() }}
        </div>
      </div>
    </div>
  </div>

  {{-- @foreach ($film as $data)
  <div id="modal"
    class="fixed top-0 left-0 w-screen h-screen flex items-center justify-center transform scale-0 transition-transform duration-300">
    <!-- Modal content -->
    <div class="bg-white w-1/2 h-1/2 px-8 py-5">
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
      <p class="py-3 text-justify">
        {{$data->deskripsi_film}}
      </p>
    </div>
  </div>
  @endforeach --}}

@endsection