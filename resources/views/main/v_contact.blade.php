<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | Mahardika Ticket</title>

    <!-- Header -->
    @component("components.header_page")
    @endcomponent

</head>
<body class="max-w-screen-2xl mx-auto leading-normal tracking-normal bg-white text-white" style="font-family: 'Source Sans Pro', sans-serif;">

    <div class="preloader bg-white">
        <div class="loading">
          <img src="{{ asset('mahardika_ticket/img/tenor.png') }}" width="80">
          <p class="text-blue-ticket font-lato font-bold py-2">Harap Tunggu</p>
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
          <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-white lg:bg-transparent text-blue-ticket font-lato p-4 lg:p-0 z-20" id="nav-content">
            <ul class="list-reset lg:flex justify-end flex-1 items-center">
              <li class="mr-3">
                <a class="inline-block text-blue-ticket font-lato no-underline hover:text-gray-800 hover:text-underline py-2 px-1" href="/homepage">Home</a>
              </li>
              <li class="mr-3">
                <a class="inline-block text-blue-ticket font-lato no-underline hover:text-gray-800 hover:text-underline py-2 px-1" href="/aboutus">About Us</a>
              </li>
              <li class="mr-3">
                <a class="inline-block py-2 px-1 text-blue-ticket font-lato font-bold no-underline" href="/contact">Contact</a>
              </li>
            </ul>
          </div>
        @endsection
    @endcomponent

    {{-- Content --}}
    <div class="bg-white">
        <div class="container mx-auto items-center">
            <div class="mt-14">
                <div class="p-8 space-y-3">
                    <div class="shadow-md rounded-lg bg-white">
                        <div class="w-full text-center py-3">
                            <p class="text-sm tracking-widest font-bold text-5xl text-blue-ticket font-lato pt-3">Contact</p>
                        </div>
                        <div class="w-full mb-4">
                            <div class="h-1 mx-auto bg-gray-600 w-1/6 opacity-25 my-0 py-0 rounded-t"></div>
                        </div>
                        <div class="mt-8 container">
                            <div class="bg-white text-gray-700 rounded text-center border-2 border-gray-200">
                                <div class="flex justify-center py-2">
                                    <div class="bg-blue-ticket rounded-full h-16 w-16 -mt-8 flex items-center justify-center">
                                        <i class="fas fa-phone-alt text-white text-3xl">
                                        </i>
                                    </div>
                                </div>
                                <div class="p-6 flex flex-wrap">
                                    <div class="w-full md:w-1/2 md:pr-32 order-3 md:order-1">
                                        <div class="max-w-md md:float-right md:text-right leading-loose tracking-tight md:sticky md:top-0 ">
                                            <p class="font-bold text-blue-ticket font-lato text-xl my-2">Sosial Media</p>
                            
                                            <ul class="flex flex-wrap text-blue-ticket font-lato justify-between flex-col">
                                                <li><a href="#" class="nav hover:text-gray-900"><i class="fab fa-whatsapp"></i> Whatsapp</a></li>
                                                <li><a href="#" class="nav "><i class="fab fa-instagram"></i> Instagram</a></li>
                                                <li><a href="#" class="nav "><i class="fab fa-facebook"></i> Facebook</a></li>
                                                <li><a href="#" class="nav "><i class="fab fa-telegram"></i> Telegram</a></li>
                                            </ul>
                                            <a href="#" class="normal text-blue-ticket font-lato font-bold hover:font-bold">more...</a>
                                        </div>
                                    </div>
                                    <div class="w-full md:w-1/2 order-1 md:order-2">
                                        <div class="max-w-md leading-loose text-blue-ticket font-lato tracking-tight text-justify">
                                            <h1 class="font-bold my-2 text-blue-ticket font-lato text-xl">Contact Me</h1>

                                            <p class=""><i class="fas fa-phone pr-2"></i> (+026) - 7777</p>
                                            <p class=""><i class="fas fa-map-marker-alt pr-3"></i> Indonesia</p>
                                            <p class=""><i class="fas fa-envelope pr-2"></i> hrmahardika@gmail.com</p>
                                            

                                            <div class="w-full md:w-1/2 md:pr-32 pt-12 md:pt-0 md:sticky md:bottom-0 order-4 md:order-3">
                                                <div class="max-w-md md:float-right md:text-right leading-loose tracking-tight md:mb-16">
                                                    
                                                </div>
                                            </div>
                                            <div class="w-full md:w-full text-blue-ticket font-lato order-2 md:order-4">
                                                <div class="max-w-md leading-loose tracking-tight">
                                                    <p class="font-bold md:mt-10 md:mb-5">About Me</p>
                                    
                                                    <p class="mb-8 ">
                                                        We Are PT. MAHARDIKA SOLUSI TEKNOLOGI
                                                        A Professional IT Consultant and Software Development 
                                                        Services in Indonesia.    
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>    
                        </div>
                    </div>
                    <div class="shadow-xl rounded-lg bg-white">
                        <h1 class="w-full tracking-widest py-3 text-5xl font-bold leading-tight text-center text-blue-ticket font-lato">
                            Google Maps
                        </h1>
                        <div class="w-full mb-4">
                            <div class="h-1 mx-auto bg-gray-600 w-1/6 opacity-25 my-0 py-0 rounded-t"></div>
                        </div>
                        <div class="mx-6 mb-6">
                            <div class="flex">
                                <div class="w-full mb-4">
                                    <object style="border:0; height: 450px; width: 100%;" data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.8476269056127!2d107.591019314317!3d-6.908816469534198!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6151d3906f5%3A0xb61bbd8c34675dfe!2sPt%20Mahardika%20Solusi%20Teknologi!5e0!3m2!1sid!2sid!4v1624710477542!5m2!1sid!2sid"></object>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
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