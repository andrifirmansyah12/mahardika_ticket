@extends('layout.index')
@section('title','Dashboard')

@section('content')
      
    <div class="">
        <div class="w-full text-center">
          <p class="text-sm tracking-widest font-bold">Rekapan</p>
          <h1 class="font-bold text-5xl font-bold">
              Data
          </h1>
      </div>
              
      <div class="grid grid-cols-1 gap-4 sm:grid-cols-3 ">
  
          <div class="p-2 sm:p-10 text-center cursor-pointer">
              <div class="py-16 max-w-sm rounded overflow-hidden shadow-lg hover:bg-white transition duration-500  bg-white">
                  <div class="space-y-10">
                      <i class="fas fa-sticky-note" style="font-size:48px;"></i>
                      
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
                    <i class="fa fa-head-side-mask" style="font-size:48px;"></i>
                    
                    <div class="px-6 py-4">
                        <div class="space-y-5">
                            <div class="font-bold text-xl mb-2">??</div>
                            <p class="text-gray-700 text-base">
                              ??
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

