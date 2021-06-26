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
<body class="leading-normal tracking-normal bg-white text-white" style="font-family: 'Source Sans Pro', sans-serif;">

    <!-- Nav -->
    @component("components.nav_page")
    @endcomponent

    {{-- Content --}}
    <div class="bg-gray-200">
        <div class="container mx-auto items-center">
            <div class="mt-14">
                <div class="p-8 space-y-3">
                    <div class="shadow-xl rounded-lg bg-white">
                        <div class="w-full text-center py-3">
                            <p class="text-sm tracking-widest font-bold text-5xl text-gray-600 pt-3">Contact</p>
                        </div>
                        <div class="w-full mb-4">
                            <div class="h-1 mx-auto bg-gray-600 w-1/6 opacity-25 my-0 py-0 rounded-t"></div>
                        </div>
                        <div class="mt-8 container">
                            <div class="bg-white text-gray-700 rounded text-center border-2 border-gray-200">
                                <div class="flex justify-center py-2">
                                    <div class="bg-gray-200 rounded-full h-16 w-16 -mt-8 flex items-center justify-center">
                                        <i class="fas fa-phone-alt text-gray-600 text-3xl">
                                        </i>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="flex flex-wrap">
                                        <div class="w-full sm:w-1/2 p-8">
                                            <div class="w-full space-y-3">
                                                <div class="bg-gray-600 rounded-full">
                                                    <p class="tracking-widest text-center text-xl text-white p-1">
                                                        <i class="fas fa-building"></i>
                                                        PT. Mahardika Solusi Teknologi
                                                    </p>
                                                </div>
                                                <div class="bg-gray-600 rounded-md">
                                                    <p class="px-8 tracking-widest text-center text-xl text-justify text-white p-1">
                                                        <i class="fas fa-map-marker-alt"></i>
                                                        Jl. Kuta kencana utara No. 17, Mekarwangi kecamatan
                                                        bojongloa kidul, Kota Bandung - Jawa Barat.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="w-full sm:w-1/2 p-8 ">
                                            <div class="w-full space-y-3">
                                                <div class="bg-gray-600 rounded-full">
                                                    <p class="tracking-widest text-center text-xl text-white p-1">
                                                        <i class="fas fa-phone-alt"></i>
                                                        026 - 332145
                                                    </p>
                                                </div>
                                                <div class="bg-gray-600 rounded-full">
                                                    <p class="tracking-widest text-center text-xl text-white p-1">
                                                        <i class="fab fa-instagram"></i>
                                                        Mahardika Solusi Teknologi
                                                    </p>
                                                </div>
                                                <div class="bg-gray-600 rounded-full">
                                                    <p class="tracking-widest text-center text-xl text-white p-1">
                                                        <i class="fab fa-facebook"></i>
                                                        Mahardika Solusi Teknologi
                                                    </p>
                                                </div>
                                                <div class="bg-gray-600 rounded-full">
                                                    <p class="tracking-widest text-center text-xl text-white p-1">
                                                        <i class="fab fa-twitter"></i>
                                                        Mahardika Solusi Teknologi
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
                        <h1 class="w-full tracking-widest py-3 text-5xl font-bold leading-tight text-center text-gray-600">
                            Google Maps
                        </h1>
                        <div class="w-full mb-4">
                            <div class="h-1 mx-auto bg-gray-600 w-1/6 opacity-25 my-0 py-0 rounded-t"></div>
                        </div>
                        <div class="mx-6 mb-6">
                            <div class="flex">
                                <div class="w-full mb-4">
                                    <object style="border:0; height: 450px; width: 100%;" data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.2506277041375!2d108.3187113142735!3d-6.3615999953965705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6eb92f80cf7b55%3A0x7262306082cc4945!2sBalai%20Desa%20Kenanga!5e0!3m2!1sid!2sid!4v1618481153293!5m2!1sid!2sid"></object>
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