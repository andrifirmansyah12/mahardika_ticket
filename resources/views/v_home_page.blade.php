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
<body class="max-w-screen-2xl mx-auto leading-normal tracking-normal bg-white text-white" style="font-family: 'Source Sans Pro', sans-serif;">

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
          <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-white lg:bg-transparent text-blue-ticket p-4 lg:p-0 z-20" id="nav-content">
            <ul class="list-reset lg:flex justify-end flex-1 items-center">
              <li class="mr-3">
                <a class="font-lato inline-block py-2 px-1 text-blue-ticket font-bold font-sans no-underline" href="/homepage">Home</a>
              </li>
              <li class="mr-3">
                <a class="font-lato inline-block text-blue-ticket no-underline font-sans hover:text-gray-800 hover:text-underline py-2 px-1" href="/aboutus">About Us</a>
              </li>
              <li class="mr-3">
                <a class="font-lato inline-block no-underline text-blue-ticket font-sans hover:text-gray-800 hover:text-underline py-2 px-1" href="/contact">Contact</a>
              </li>
              <li class="hidden lg:block">
                <span class="js-dropdown">
                  <a class="js-dropdown__toggle btns-text">Click Me!</a>
                  <span class="js-dropdown__slider">
                    <a href="#" class="js-dropdown__item">New</a>
                    <a href="#" class="js-dropdown__item">Save</a>
                    <a href="#" class="js-dropdown__item">Open</a>
                    <a href="#" class="js-dropdown__item">Edit</a>
                  </span>
                </span>
              </li>
            </ul>
          </div>
        @endsection
    @endcomponent

    <!--Header-->
	<div class="w-full m-0 p-0 bg-cover bg-bottom" >
    <div class="container max-w-4xl mx-auto pt-32 text-center break-normal">
      <!--Title-->
        <p class="font-lato text-blue-ticket font-extrabold text-3xl md:text-5xl">
          Mahardika Ticket
        </p>
        <p class="font-lato text-xl md:text-2xl text-blue-ticket">Welcome to my Blog</p>
    </div>
  </div>
  
  <!--Container-->
  <div class="container  px-4 md:px-0 max-w-6xl mx-auto pt-16">
    
    <div class="mx-2 sm:mx-6">
      
      <!--Nav-->
      <nav class="mt-0 w-full">
        <div class="container mx-auto flex items-center">
          
          <div class="flex w-1/2 pl-4 text-sm">
            <ul class="list-reset flex justify-between flex-1 md:flex-none items-center font-bold">
              <li class="mr-2">
              <a class="font-lato inline-block py-2 px-2 text-blue-ticket hover:text-white no-underline hover:bg-indigo-600" href="/store">STORE</a>
              </li>
              <li class="mr-2">
              <a class="font-lato inline-block text-blue-ticket hover:text-white no-underline py-2 px-2 hover:bg-indigo-600" href="/ticket_concert">TICKET</a>
              </li>
              <li class="mr-2">
              <a class="font-lato inline-block text-blue-ticket hover:text-white no-underline py-2 px-2 hover:bg-indigo-600" href="/galeri">GALERI</a>
              </li>
              {{-- <li class="mr-2">
              <a class="font-lato inline-block text-blue-ticket hover:text-white no-underline py-2 px-2 hover:bg-indigo-600" href="/latihan">POST VUE</a>
              </li> --}}
            </ul>
          </div>

          <div class="flex w-1/2 justify-end content-center">		
            <a class="link inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline text-center h-10 p-2 md:h-auto md:p-4 avatar" data-tippy-content="Twitter" href="https://twitter.com/intent/tweet?url=#">
              <svg class="fill-current h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M30.063 7.313c-.813 1.125-1.75 2.125-2.875 2.938v.75c0 1.563-.188 3.125-.688 4.625a15.088 15.088 0 0 1-2.063 4.438c-.875 1.438-2 2.688-3.25 3.813a15.015 15.015 0 0 1-4.625 2.563c-1.813.688-3.75 1-5.75 1-3.25 0-6.188-.875-8.875-2.625.438.063.875.125 1.375.125 2.688 0 5.063-.875 7.188-2.5-1.25 0-2.375-.375-3.375-1.125s-1.688-1.688-2.063-2.875c.438.063.813.125 1.125.125.5 0 1-.063 1.5-.25-1.313-.25-2.438-.938-3.313-1.938a5.673 5.673 0 0 1-1.313-3.688v-.063c.813.438 1.688.688 2.625.688a5.228 5.228 0 0 1-1.875-2c-.5-.875-.688-1.813-.688-2.75 0-1.063.25-2.063.75-2.938 1.438 1.75 3.188 3.188 5.25 4.25s4.313 1.688 6.688 1.813a5.579 5.579 0 0 1 1.5-5.438c1.125-1.125 2.5-1.688 4.125-1.688s3.063.625 4.188 1.813a11.48 11.48 0 0 0 3.688-1.375c-.438 1.375-1.313 2.438-2.563 3.188 1.125-.125 2.188-.438 3.313-.875z"></path></svg>
            </a>
            <a class="link inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline text-center h-10 p-2 md:h-auto md:p-4 avatar" data-tippy-content="Facebook" href="https://www.facebook.com/sharer/sharer.php?u=#">
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
        @forelse ($blog as $data)
        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
          <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
            <a href="/homepage/detail{{ $data->id }}" class="flex flex-wrap no-underline hover:no-underline">
              <img src="{{ url('img-blog/' . $data->foto)}}" 
                class="h-64 w-full object-cover object-top rounded-t pb-6">
              <p class="w-full text-blue-ticket font-lato text-xs md:text-sm px-6">{{ $data->nama_tempat }}</p>
              <div class="w-full font-bold font-lato text-xl text-blue-ticket px-6">{{ $data->judul }}</div>
              <p class="text-blue-ticket font-lato text-base px-6 mb-5">
                {{ $data->deskripsi }}
              </p>
            </a>
            </div>
          <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
            <div class="flex items-center justify-end">
              <p class="text-blue-ticket text-xs md:text-sm">{{ $data->tanggal }}</p>
            </div>
          </div>
        </div>
        @empty
        <div class="flex items-center bg-yellow-500 text-white text-sm font-bold px-4 py-3" role="alert">
          <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
          <p>Data Ticket Film Belum Tersedia</p>
        </div>
        @endforelse ($film as $data)

        <!--2/3 col -->
        <div class="w-full md:w-2/3 p-6 flex flex-col flex-grow flex-shrink">
          <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden">
            <div id="slick-image" class="flex flex-wrap no-underline hover:no-underline">	
              <img src="https://images.unsplash.com/photo-1571768153481-d8d9a61949b3?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" class="h-full w-full rounded">
              <img src="https://images.unsplash.com/photo-1594655836195-e9f9efc7419f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" class="h-full w-full rounded">
              <img src="https://images.unsplash.com/photo-1566856528896-f09d321ec12b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" class="h-full w-full rounded">
              <img src="https://images.unsplash.com/photo-1622484166375-09b737857159?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" class="h-full w-full rounded">
              <img src="https://images.unsplash.com/photo-1591372191945-6a0c07c08521?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=750&q=80" class="h-full w-full rounded">
              <img src="https://images.unsplash.com/photo-1564077943-45f4bc2d285e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=750&q=80" class="h-full w-full rounded">
              <img src="https://images.unsplash.com/photo-1602881205200-068d2b8360f7?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" class="h-full w-full rounded">
              <img src="https://images.unsplash.com/photo-1512140528825-526de61a5bcb?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" class="h-full w-full rounded">
              <img src="https://images.unsplash.com/photo-1609710425116-00f1d3b91490?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" class="h-full w-full rounded">
              {{-- <p class="w-full text-gray-600 text-xs md:text-sm px-6">GETTING STARTED</p>
              <div class="w-full font-bold text-xl text-gray-900 px-6">Lorem ipsum dolor sit amet.</div>
              <p class="text-gray-800 font-serif text-base px-6 mb-5">
                Lorem ipsum eu nunc commodo posuere et sit amet ligula. 
              </p> --}}
            </div>
          </div>
        </div>

        <!--1/3 col -->
        <div class="w-full md:w-1/3 flex flex-col flex-grow flex-shrink">
          <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden">
          </div>
          <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden ">
          </div>
        </div>
      </div>
      <!--/ Post Content-->   
    </div>

    {{-- Pagination --}}
    {{-- <div class="mb-3 bg-gray-200 text-gray-200">
      {{ $blog->links() }}
    </div> --}}

    <div class="flex flex-col gap-y-2 mt-20 items-center justify-center">
      <h1 class="text-4xl font-bold text-blue-ticket font-lato">Blog Newest</h1>
      <div class="border-b-2 w-20 border-yellow-600"></div>
    </div>

    <div class="flex flex-row bg-white">
      <div class="container w-full max-w-6xl mx-auto px-2 py-8">
        <div id="slick-blog" class="flex flex-wrap -mx-2">
          @foreach ($blog as $data)
          <div class="w-full md:w-1/3 px-2 pb-12">
            <div class="h-full bg-white rounded overflow-hidden shadow-md hover:shadow-lg relative smooth">
              <img src="{{ url('img-blog/' . $data->foto)}}" class="h-48 object-cover object-top w-full rounded-t shadow-lg">
              <div class="p-6 h-auto md:h-48">	
                <p class="text-blue-ticket text-xs md:text-sm font-lato">{{ $data->nama_tempat }}</p>
                <a href="/homepage/detail{{ $data->id }}" class="no-underline hover:no-underline">
                <div class="font-bold text-xl font-lato text-blue-ticket">{{ $data->judul }}.</div>
                </a>
                <p class="text-blue-ticket font-lato text-base mb-5">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula. 
                </p>
              </div>
              <div class="flex items-center justify-end inset-x-0 bottom-0 p-6">
                <p class="text-blue-ticket text-xs md:text-sm">2 MIN READ</p>
              </div>
            </div>
          </div>
          @endforeach ($blog as $data)
        </div>
      </div>
    </div>

    <div class="shadow-md p-3 md:p-10 flex md:flex-row flex-col mb-20 gap-3 md:gap-2">
      <div class="flex items-center justify-center">
        <img class="w-full h-96 object-cover object-center" src="https://images.unsplash.com/photo-1502773860571-211a597d6e4b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="">
      </div>
      <div>
        <form action="{{route('send-mail')}}" class="form bg-white p-0 md:p-6 relative" method="POST">
          @csrf
          <h3 class="text-2xl text-blue-ticket font-lato font-semibold">Let us call you!</h3>
          <p class="text-blue-ticket font-lato"> To help you choose your property</p>
          <div class="flex space-x-5 mt-3">
              <input type="text" name="name" id="name" placeholder="Your Name" class="font-lato border p-2 text-gray-600 w-1/2 " required>
              <input type="tel" name="number" id="number" placeholder="Your Number" class="font-lato border text-gray-600 p-2 w-1/2 " required>
          </div>
          <input type="email" name="email" id="email" placeholder="Your Email" class="font-lato border text-gray-600 p-2 w-full mt-3" required>
          <textarea name="message" id="message" cols="10" rows="3" placeholder="Tell us about desired property" class="font-lato text-gray-600 border p-2 mt-3 w-full" required></textarea>
            @if (Session::has('message_sent'))
            <div class="flex bg-green-200 p-4">
              <div class="mr-4">
                <div class="h-10 w-10 text-white bg-green-600 rounded-full flex justify-center items-center">
                  <i class="font-lato material-icons">done</i>
                </div>
              </div>
              <div class="flex justify-between w-full">
                <div class="text-green-600">
                  <p class="mb-2 font-bold">
                    Succes
                  </p>
                  <p class="text-xs">
                    {{Session::get('message_sent')}}
                  </p>
                </div>
                <span id='close' onclick='this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode); return false;'>
                  x
                </span>
              </div>
            </div>
            @endif
          <button type="submit" class="font-lato w-full mt-6 bg-blue-ticket hover:opacity-90 text-white font-semibold p-3">Submit</button>
        </form>
      </div>
    </div>
    
    
      {{-- <!--Subscribe-->
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
      <!-- /Subscribe--> --}}
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

    <script src="https://unpkg.com/popper.js@1/dist/umd/popper.min.js"></script>
	  <script src="https://unpkg.com/tippy.js@4"></script>
    <script>
        tippy('.link',{
        placement: 'bottom'
      })

      window.onload = function(){
        document.getElementById('close').onclick = function(){
        this.parentNode.parentNode.parentNode
        .removeChild(this.parentNode.parentNode);
        return false;
          };
      };

      // function myFunction() {
      //   var x = document.getElementById("subDropdownUser");
      //   if (x.style.display === "none") {
      //     x.style.display = "block";
      //   } else {
      //     x.style.display = "none";
      //   }
      // }
    </script>

  </body>
</html>

<!-- Footer JS -->
@component("components.footerJS_page")
@endcomponent