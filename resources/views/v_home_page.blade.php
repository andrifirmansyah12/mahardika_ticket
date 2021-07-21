<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page | Mahardika Ticket</title>
    
    <!-- Header -->
    @component("components.header_page")
    @endcomponent

</head>
<body class="leading-normal tracking-normal bg-white text-white" style="font-family: 'Source Sans Pro', sans-serif;">

    <div class="preloader bg-white">
      <div class="loading">
        <img src="{{ asset('mahardika_ticket/img/tenor.png') }}" width="80">
        <p class="text-gray-600 font-bold py-2">Harap Tunggu</p>
      </div>
    </div>

    <!-- Nav -->
    @component("components.nav_page")
    @section('nav')
        <div class="block lg:hidden pr-4">
            <button id="nav-toggle" class="flex items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
              <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <title>Menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
              </svg>
            </button>
          </div>
          <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20" id="nav-content">
            <ul class="list-reset lg:flex justify-end flex-1 items-center">
              <li class="mr-3">
                <a class="inline-block py-2 px-1 text-black font-bold font-sans no-underline" href="/homepage">Home</a>
              </li>
              <li class="mr-3">
                <a class="inline-block text-black no-underline font-sans hover:text-gray-800 hover:text-underline py-2 px-1" href="/aboutus">About Us</a>
              </li>
              <li class="mr-3">
                <a class="inline-block text-black no-underline font-sans hover:text-gray-800 hover:text-underline py-2 px-1" href="/contact">Contact</a>
              </li>
            </ul>
          </div>
        @endsection
    @endcomponent

    {{-- <section class="w-full bg-gray-200 bg-cover bg-center rounded-t-lg flex items-center justify-center" style="background-image: url({{ asset('mahardika_ticket/dist/img/img4.jpg') }});">
      <div class="container flex flex-wrap mx-auto px-2 pt-4 pb-12 text-gray-800">
        <h1 class="w-full my-2 mt-16 text-5xl font-extrabold leading-tight text-center text-white">
          Best Seller
        </h1>
        @forelse($film as $data)
        <div class='flex max-w-sm w-70 shadow-2xl rounded-lg overflow-hidden mx-auto'>
          <div class='flex items-center w-full px-2 py-2'>
              <div class='mx-3 w-full'>
                  <div class="flex flex-row mb-6 mt-2">
                    <a class='border-2 transform transition hover:scale-95 duration-300 ease-in-out rounded-md cursor-pointer mb-3' href="/homepage/detail{{ $data->id }}">
                      <img class="rounded" src="{{ url('img-film/' . $data->foto)}}">
                    </a>
                  </div>
              </div>
          </div>
        </div>
        @endforeach
      </div>
    </section>
    
    @foreach ($film as $data)
    <div class="w-full p-7 px-16 bg-gray-200 flex justify-center items-center">
      <article class="sm:grid grid-cols-5 bg-white shadow-sm p-7 relative sm:p-4 rounded-lg lg:col-span-2 mt-4 lg:mt-0 py-4 px-8 shadow focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
        <a class="rounded-md cursor-pointer" href="/homepage/detail{{ $data->id }}"><img src="{{ url('img-film/' . $data->foto)}}" alt="foto" class="w-full rounded-lg"></a>
        <div class="pt-5 space-y-2 self-center sm:pt-0 sm:pl-10 col-span-3">
          <a href="/homepage/detail{{ $data->id }}" class="mx-auto font-bold text-green-600 text-5xl">
            {{ $data->judul }}
          </a>
          <p class="px-1 mx-auto text-black text-red-600">
            {{ $data->hari }}
            <span class="px-4 font-semibold">{{ $data->tanggal }}</span>
          </p>
          <h3 class="px-1 mx-auto text-2xl font-bold text-red-600">
            {{ $data->jam_tayang }}
          </h3>
        </div>
        <div class="justify-self-end mt-2">
          <h3 class="line-through mx-auto text-1xl font-bold text-red-600">
            {{ $data->diskon }}
          </h3>
          <p class="py-1 mx-auto text-black font-bold text-4xl">
            {{ $data->harga }}
          </p>
        </div>
      </article>
    </div>
    @endforeach 
    
    <div class="mb-3 bg-gray-200 text-gray-200">
      {{ $film->links() }}
    </div> --}}

    <!--Header-->
	<div class="w-full m-0 p-0 bg-cover bg-bottom" style="background-image:url('cover.jpg'); height: 60vh; max-height:460px;">
    <div class="container max-w-4xl mx-auto pt-16 md:pt-32 text-center break-normal">
      <!--Title-->
        <p class="text-gray-600 font-extrabold text-3xl md:text-5xl">
          Mahardika Ticket
        </p>
        <p class="text-xl md:text-2xl text-gray-500">Welcome to my Blog</p>
    </div>
  </div>
  
  <!--Container-->
  <div class="container px-4 md:px-0 max-w-6xl mx-auto -mt-32">
    
    <div class="mx-0 sm:mx-6">
      
      <!--Nav-->
      <nav class="mt-0 w-full">
        <div class="container mx-auto flex items-center">
          
          <div class="flex w-1/2 pl-4 text-sm">
            <ul class="list-reset flex justify-between flex-1 md:flex-none items-center">
              <li class="mr-2">
              <a class="inline-block py-2 px-2 text-gray-600 hover:text-gray-300 no-underline hover:underline hover:bg-indigo-600" href="/store">STORE</a>
              </li>
              <li class="mr-2">
              <a class="inline-block text-gray-600 hover:text-gray-300 no-underline  hover:underline py-2 px-2 hover:bg-indigo-600" href="/ticketkonser">TICKET</a>
              </li>
              <li class="mr-2">
              <a class="inline-block text-gray-600 hover:text-gray-300 no-underline  hover:underline py-2 px-2 hover:bg-indigo-600" href="/forum">FORUM</a>
              </li>
              <li class="mr-2">
              <a class="inline-block text-gray-600 hover:text-gray-300 no-underline  hover:underline py-2 px-2 hover:bg-indigo-600" href="post_vue.html">POST VUE</a>
              </li>
            </ul>
          </div>


          <div class="flex w-1/2 justify-end content-center">		
            <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline text-center h-10 p-2 md:h-auto md:p-4 avatar" data-tippy-content="@twitter_handle" href="https://twitter.com/intent/tweet?url=#">
              <svg class="fill-current h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M30.063 7.313c-.813 1.125-1.75 2.125-2.875 2.938v.75c0 1.563-.188 3.125-.688 4.625a15.088 15.088 0 0 1-2.063 4.438c-.875 1.438-2 2.688-3.25 3.813a15.015 15.015 0 0 1-4.625 2.563c-1.813.688-3.75 1-5.75 1-3.25 0-6.188-.875-8.875-2.625.438.063.875.125 1.375.125 2.688 0 5.063-.875 7.188-2.5-1.25 0-2.375-.375-3.375-1.125s-1.688-1.688-2.063-2.875c.438.063.813.125 1.125.125.5 0 1-.063 1.5-.25-1.313-.25-2.438-.938-3.313-1.938a5.673 5.673 0 0 1-1.313-3.688v-.063c.813.438 1.688.688 2.625.688a5.228 5.228 0 0 1-1.875-2c-.5-.875-.688-1.813-.688-2.75 0-1.063.25-2.063.75-2.938 1.438 1.75 3.188 3.188 5.25 4.25s4.313 1.688 6.688 1.813a5.579 5.579 0 0 1 1.5-5.438c1.125-1.125 2.5-1.688 4.125-1.688s3.063.625 4.188 1.813a11.48 11.48 0 0 0 3.688-1.375c-.438 1.375-1.313 2.438-2.563 3.188 1.125-.125 2.188-.438 3.313-.875z"></path></svg>
            </a>
            <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline text-center h-10 p-2 md:h-auto md:p-4 avatar" data-tippy-content="#facebook_id" href="https://www.facebook.com/sharer/sharer.php?u=#">
              <svg class="fill-current h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M19 6h5V0h-5c-3.86 0-7 3.14-7 7v3H8v6h4v16h6V16h5l1-6h-6V7c0-.542.458-1 1-1z"></path></svg>
            </a>
          </div>

        </div>
      </nav>

      <div class="w-full text-xl md:text-2xl text-gray-800 leading-normal rounded-t">
        
      <!--Lead Card-->
      <div class="h-full bg-white rounded overflow-hidden shadow-lg">
        <a href="post.html" class="flex flex-wrap no-underline hover:no-underline">
          <div class="w-full rounded-t">	
            <img src="https://images.unsplash.com/photo-1598387993441-a364f854c3e1?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1510&q=80" 
                class="h-full w-full shadow">
          </div>
        </a>
      </div>
      <!--/Lead Card-->


      <!--Posts Container-->
      <div class="flex flex-wrap justify-between pt-12 -mx-6">

        <!--1/3 col -->
        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
          <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
            <a href="#" class="flex flex-wrap no-underline hover:no-underline">
              <img src="https://images.unsplash.com/photo-1520224327482-f7863d2c3865?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" 
                class="h-64 w-full rounded-t pb-6">
              <p class="w-full text-gray-600 text-xs md:text-sm px-6">GETTING STARTED</p>
              <div class="w-full font-bold text-xl text-gray-900 px-6">Lorem ipsum dolor sit amet.</div>
              <p class="text-gray-800 font-serif text-base px-6 mb-5">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula. 
              </p>
            </a>
          </div>
          <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
            <div class="flex items-center justify-between">
              <img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name" src="http://i.pravatar.cc/300" alt="Avatar of Author">
              <p class="text-gray-600 text-xs md:text-sm">1 MIN READ</p>
            </div>
          </div>
        </div>
      
        
        <!--1/3 col -->
        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
          <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
            <a href="#" class="flex flex-wrap no-underline hover:no-underline">
              <img src="https://images.unsplash.com/photo-1512404871764-1cf03a297841?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" 
                class="h-64 w-full rounded-t pb-6">
              <p class="w-full text-gray-600 text-xs md:text-sm px-6">GETTING STARTED</p>
              <div class="w-full font-bold text-xl text-gray-900 px-6">Lorem ipsum dolor sit amet.</div>
              <p class="text-gray-800 font-serif text-base px-6 mb-5">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ip Aliquam at ipsum eu nunc commodo posuere et sit amet ligula. 
              </p>
            </a>
            </div>
          <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
            <div class="flex items-center justify-between">
              <img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name" src="http://i.pravatar.cc/300" alt="Avatar of Author">
              <p class="text-gray-600 text-xs md:text-sm">1 MIN READ</p>
            </div>
          </div>
        </div>

        <!--1/3 col -->
        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
          <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
            <a href="#" class="flex flex-wrap no-underline hover:no-underline">
              <img src="https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=750&q=80" 
                class="h-64 w-full rounded-t pb-6">
              <p class="w-full text-gray-600 text-xs md:text-sm px-6">GETTING STARTED</p>
              <div class="w-full  font-bold text-xl text-gray-900 px-6">Lorem ipsum dolor sit amet.</div>
              <p class="text-gray-800 font-serif text-base px-6 mb-5">
                Lorem ipsum eu nunc commodo posuere et sit amet ligula. 
              </p>
            </a>
          </div>
          <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
            <div class="flex items-center justify-between">
              <img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name" src="http://i.pravatar.cc/300" alt="Avatar of Author">
              <p class="text-gray-600 text-xs md:text-sm">1 MIN READ</p>
            </div>
          </div>
        </div>


        <!--1/2 col -->
        <div class="w-full md:w-1/2 p-6 flex flex-col flex-grow flex-shrink">
          <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
            <a href="#" class="flex flex-wrap no-underline hover:no-underline">
              <img src="https://images.unsplash.com/photo-1512405173804-40c66c0ed709?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" 
                class="h-full w-full rounded-t pb-6">
              <p class="w-full text-gray-600 text-xs md:text-sm px-6">GETTING STARTED</p>
              <div class="w-full font-bold text-xl text-gray-900 px-6">Lorem ipsum dolor sit amet.</div>
              <p class="text-gray-800 font-serif text-base px-6 mb-5">
                Lorem ipsum eu nunc commodo posuere et sit amet ligula. 
              </p>
            </a>
          </div>
          <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
            <div class="flex items-center justify-between">
              <img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name" src="http://i.pravatar.cc/300" alt="Avatar of Author">
              <p class="text-gray-600 text-xs md:text-sm">1 MIN READ</p>
            </div>
          </div>
        </div>

        <!--1/2 col -->
        <div class="w-full md:w-1/2 p-6 flex flex-col flex-grow flex-shrink">
          <div class="flex-1 flex-row bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
            <a href="#" class="flex flex-wrap no-underline hover:no-underline">	
              <img src="https://images.unsplash.com/photo-1598387181032-a3103a2db5b3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=755&q=80" 
                class="h-full w-full rounded-t pb-6">
              <p class="w-full text-gray-600 text-xs md:text-sm px-6">GETTING STARTED</p>
              <div class="w-full font-bold text-xl text-gray-900 px-6">Lorem ipsum dolor sit amet.</div>
              <p class="text-gray-800 font-serif text-base px-6 mb-5">
                Lorem ipsum eu nunc commodo posuere et sit amet ligula. 
              </p>
            </a>
          </div>
          <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
            <div class="flex items-center justify-between">
              <img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name" src="http://i.pravatar.cc/300" alt="Avatar of Author">
              <p class="text-gray-600 text-xs md:text-sm">1 MIN READ</p>
            </div>
          </div>
        </div>



        <!--2/3 col -->
        <div class="w-full md:w-2/3 p-6 flex flex-col flex-grow flex-shrink">
          <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
            <a href="#" class="flex flex-wrap no-underline hover:no-underline">	
              <img src="https://images.unsplash.com/photo-1496698161505-d1703dbcab63?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=665&q=80" 
                class="h-full w-full rounded-t pb-6">
              <p class="w-full text-gray-600 text-xs md:text-sm px-6">GETTING STARTED</p>
              <div class="w-full font-bold text-xl text-gray-900 px-6">Lorem ipsum dolor sit amet.</div>
              <p class="text-gray-800 font-serif text-base px-6 mb-5">
                Lorem ipsum eu nunc commodo posuere et sit amet ligula. 
              </p>
            </a>
          </div>
          <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
            <div class="flex items-center justify-between">
              <img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name" src="http://i.pravatar.cc/300" alt="Avatar of Author">
              <p class="text-gray-600 text-xs md:text-sm">1 MIN READ</p>
            </div>
          </div>
        </div>

        <!--1/3 col -->
        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
          <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
            <a href="#" class="flex flex-wrap no-underline hover:no-underline">
              <img src="https://images.unsplash.com/photo-1501447250418-246949108fc1?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=749&q=80" 
                class="h-full w-full rounded-t pb-6">
              <p class="w-full text-gray-600 text-xs md:text-sm px-6">GETTING STARTED</p>
              <div class="w-full font-bold text-xl text-gray-900 px-6">Lorem ipsum dolor sit amet.</div>
              <p class="text-gray-800 font-serif text-base px-6 mb-5">
                Lorem ipsum eu nunc commodo posuere et sit amet ligula. 
              </p>
            </a>
          </div>
          <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
            <div class="flex items-center justify-between">
              <img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name" src="http://i.pravatar.cc/300" alt="Avatar of Author">
              <p class="text-gray-600 text-xs md:text-sm">1 MIN READ</p>
            </div>
          </div>
        </div>
      </div>
      <!--/ Post Content-->   
    </div>
    
    
      <!--Subscribe-->
      <div class="mb-4">	
        <div class="container font-sans bg-green-100 rounded mt-8 p-4 md:p-24 text-center">
          <h2 class="font-bold break-normal text-2xl md:text-4xl">Subscribe to Mahardika Ticket</h2>
          <h3 class="font-bold break-normal font-normal text-gray-600 text-base md:text-xl">Get the latest posts delivered right to your inbox</h3>
          <div class="w-full text-center pt-4">
            <form action="#">
              <div class="max-w-xl mx-auto p-1 pr-0 flex flex-wrap items-center">
                <input type="email" placeholder="youremail@example.com" class="flex-1 appearance-none rounded shadow p-3 text-gray-600 mr-2 focus:outline-none">
                <button type="submit" class="flex-1 mt-4 md:mt-0 block md:inline-block appearance-none bg-green-500 text-white text-base font-semibold tracking-wider uppercase py-4 rounded shadow hover:bg-green-400">Subscribe</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- /Subscribe-->
    </div>
  </div>

    <!-- Footer -->
    @component("components.footer_page")
    @endcomponent

    <a href="#" class="back-to-top w-10 h-10 fixed bottom-0 right-0 mb-5 mr-5 flex items-center justify-center rounded-full bg-blue-600 text-white text-lg z-20 duration-300 hover:bg-blue-400">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd" />
      </svg>
    </a>
    
  </body>
</html>

<!-- Footer JS -->
@component("components.footerJS_page")
@endcomponent