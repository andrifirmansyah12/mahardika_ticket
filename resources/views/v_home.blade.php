@extends('layout.index')
@section('title','Dashboard')

@section('content')

    {{-- <div class="flex items-center bg-green-900 text-white text-sm font-bold px-4 py-3" role="alert">
        <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
        <p class="auth">Selamat Datang {{ Auth::user()->name }}<p>
    </div> --}}
    <div class="w-full text-center">
        <p class="text-sm tracking-widest font-bold">Rekapan</p>
        <h1 class="font-bold text-5xl font-bold">
            Data
        </h1>
    </div>
    <div class="mt-3">
      <div class="grid grid-cols-1 gap-4 md:grid-cols-2 xl:grid-cols-3 ">
  
          <div class="p-2 sm:p-10 text-center cursor-pointer">
              <div class="py-16 max-w-sm rounded overflow-hidden shadow-lg hover:bg-white transition duration-500  bg-white">
                  <div class="space-y-10">
                      <i class="fas fa-ticket-alt" style="font-size:48px;"></i>
                      
                      <div class="px-6 py-4">
                          <div class="space-y-5">
                              <div class="font-bold text-xl mb-2">Ticket Film</div>
                              <p class="text-gray-700 text-base">
                                {{ $ticket }} Data
                              </p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
  
          <div class="p-2 sm:p-10 text-center cursor-pointer translate-x-2">
              <div class="py-16 max-w-sm rounded overflow-hidden shadow-lg hover:bg-white transition duration-500 bg-white ">
                  <div class="space-y-10">
                      <i class="fa fa-user" style="font-size:48px;"></i>
                      
                      <div class="px-6 py-4">
                          <div class="space-y-5">
                              <div class="font-bold text-xl mb-2">Akun</div>
                              <p class="text-gray-700 text-base">
                                {{ $akun }} Data
                              </p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <div class="p-2 sm:p-10 text-center cursor-pointer translate-x-2">
            <div class="py-16 max-w-sm rounded overflow-hidden shadow-lg hover:bg-white transition duration-500 bg-white ">
                <div class="space-y-10">
                    <i class="fas fa-newspaper" style="font-size:48px;"></i>
                    
                    <div class="px-6 py-4">
                        <div class="space-y-5">
                            <div class="font-bold text-xl mb-2">Blog</div>
                            <p class="text-gray-700 text-base">
                                {{ $blog }} Data
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection