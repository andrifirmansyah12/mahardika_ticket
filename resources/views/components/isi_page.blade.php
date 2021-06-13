<section class="w-full" style="background-image: url({{ asset('mahardika_ticket/dist/img/img5.jpg') }});">
    <div class="max-w-6xl mx-auto px-5 mt-16 py-3">
      <div class="text-center mb-20">
        <h1 class="py-5 title-font  mb-4 text-4xl font-extrabold leading-10 tracking-tight sm:text-5xl sm:leading-none md:text-6xl">Best Seller</h1>
        <div class='flex max-w-sm w-70 mx-2 my-5 shadow-2xl rounded-lg overflow-hidden mx-auto'>
          <div class='flex items-center w-full'>
            
            @yield('isi')

          </div>
          
        </div>
      </div>
    </div>     
  </section>

  <div class="w-full p-7 px-16 bg-gray-200 flex justify-center items-center">
    <article class="sm:grid grid-cols-5 bg-white shadow-sm p-7 relative sm:p-4 rounded-lg lg:col-span-2 ">
      
        @yield('isi2')

    </article>
  </div>