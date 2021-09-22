@extends('layout.index')
@section('title','Blog')

@section('content')

  <div class="flex-1">
    <div class="mb-5 flex justify-between">
      <div class="mt-2">
        <button class="bg-blue-500 hover:bg-blue-700 text-white p-2 text-sm font-bold rounded">
          <a href="/akun/tambah">Tambah</a>
        </button>
      </div>
      <div class="">
        <form action="{{ url()->current() }}"
          method="get">
          <div class="mx-auto flex items-center justify-center">
            <input type="search"
              name="keyword"
              value="{{ request('keyword') }}"
              placeholder="Search ....."
              class="block w-full py-3 pl-4 pr-10 text-sm leading-5 rounded-full shadow-sm">
            <button type="submit"
              class="absolute right-10 inline-flex items-center px-2 py-2 ml-1 mr-2 text-sm focus:outline-none">
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
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
          <table id="table" class="min-w-full divide-y divide-gray-200">
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
                Nama Tempat
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Tanggal
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Deskripsi
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Aksi
                </th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              @forelse ($blog as $data)
              <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  {{ ++$i }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="flex items-center">
                    <div class="flex-shrink-0 h-10 w-10">
                      <img class="h-10 w-10 rounded-full" src="{{ url('img-blog/' . $data->foto)}}" alt="foto">
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="px-2 inline-flex text-sm leading-5 font-semibold rounded-full bg-green-100 text-green-800">{{$data->judul}}</div>
                  </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="text-sm text-gray-900">{{$data->nama_tempat}}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="text-sm text-gray-900">{{$data->tanggal}}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="text-sm text-gray-900">{{$data->deskripsi}}</div>
                </td>
                <td class="py-4 whitespace-nowrap space-x-1 text-sm font-medium">
                  <a href="/blog/detailblog/{{ $data->id }}" class="rounded-xl bg-yellow-300 p-3 hover:text-white">Detail</a>
                  <a href="/blog/edit/{{ $data->id }}" class="rounded-xl bg-green-600 p-3 hover:text-white">Edit</a>
                  <a href="/blog/hapus/{{ $data->id }}" class="rounded-xl bg-red-600 p-3 hover:text-white">Hapus</a>
                </td>
              </tr>
              @empty
              <div class="flex items-center bg-yellow-500 text-white text-sm font-bold px-4 py-3" role="alert">
                <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
                <p>Data blog Belum Tersedia</p>
              </div>
              @endforelse ($blog as $data)
            </tbody>
          </table>
          <div class="bg-yellow-600">
            {{ $blog->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
