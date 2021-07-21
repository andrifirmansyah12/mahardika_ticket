<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Mahardika Ticket</title>

    <!-- Header -->
    @component("components.header_page")
    @endcomponent

    <style>
        .hide{
            display: none;
        }

        .hide2{
            display: none;
        }
    </style>

</head>
<body class="leading-normal tracking-normal bg-white text-white" style="font-family: 'Source Sans Pro', sans-serif;">

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
                <a class="inline-block text-black no-underline font-sans hover:text-gray-800 hover:text-underline py-2 px-1" href="/homepage">Home</a>
              </li>
              <li class="mr-3">
                <a class="inline-block text-black no-underline font-sans hover:text-gray-800 hover:text-underline py-2 px-1" href="/aboutus">About Us</a>
              </li>
              <li class="mr-3">
                <a class="inline-block text-black no-underline font-sans hover:text-gray-800 hover:text-underline py-2 px-1" href="/contact">Contact</a>
              </li>
              <li class="mr-3">
                <a class="inline-block py-2 px-1 text-black font-bold font-sans no-underline" href="/latihan">Latihan</a>
              </li>
            </ul>
          </div>
        @endsection
    @endcomponent

    <div class="bg-gray-200">
      <div class="container mx-auto items-center">
          <div class="mt-14">
              <div class="p-8 space-y-3">
                  <div class="shadow-xl rounded-lg bg-white">
                      <div class="w-full text-center py-3">
                          <p class="text-sm tracking-widest font-bold text-5xl text-gray-600 pt-3">
                            Latihan
                          </p>
                      </div>
                      <div class="w-full mb-4">
                          <div class="h-1 mx-auto bg-gray-600 w-1/6 opacity-25 my-0 py-0 rounded-t"></div>
                      </div>
                      <div class="mt-8 container">
                        <div class="bg-white text-gray-700 rounded text-center border-2 border-gray-200">
                          <div class="flex justify-center py-2">
                              <div class="bg-gray-200 rounded-full h-16 w-16 -mt-8 flex items-center justify-center">
                                  <i class="fas fa-info text-gray-600 text-3xl">
                                  </i>
                              </div>
                          </div>
                          
                          <div class="py-20 h-screen bg-gray-300 px-2">
                            <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden md:max-w-lg">
                                <div class="md:flex">
                                    <div class="w-full">
                                        <div class="p-4 border-b-2"> <span class="text-lg font-bold text-gray-600">Add documents</span> </div>
                                        <div class="p-3">
                                            <div class="mb-2"> <span class="text-sm">Title</span> <input type="text" class="h-12 px-3 w-full border-gray-200 border rounded focus:outline-none focus:border-gray-300"> </div>
                                            <div class="mb-2"> <span>Attachments</span>
                                                <div class="relative h-40 rounded-lg border-dashed border-2 border-gray-200 bg-white flex justify-center items-center hover:cursor-pointer">
                                                    <div class="absolute">
                                                        <i class="loading-upload fas fa-sync fa-spin hide"></i>
                                                        <div class="flex flex-col items-center "> <i class="fa fa-cloud-upload fa-3x text-gray-200"></i> <span class="block text-gray-400 font-normal">Attach you files here</span> <span class="block text-gray-400 font-normal">or</span> <span class="block text-blue-400 font-normal">Browse files</span> </div>
                                                    </div> 
                                                    <input type="file" class="upload h-full w-full opacity-0" name="">
                                                </div>
                                                <div class="flex justify-between items-center text-gray-400"> <span>Accepted file type:.doc only</span> <span class="flex items-center "><i class="fa fa-lock mr-1"></i> secure</span> </div>
                                            </div>
                                            <div class="mt-3 text-center pb-3">
                                                <button class="button-confirm w-full h-12 text-lg w-32 bg-blue-600 rounded text-white hover:bg-blue-70">
                                                    <i class="loading-confirm fas fa-sync fa-spin hide2"></i>
                                                    <span class="btn-text">
                                                        Konfirmasi
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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

    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
        <script>
            $(document).ready(function() {
                $(".upload").on("click", function() {
                    $(".loading-upload").removeClass("hide");
                    $(".button-confirm").hide();
                    
                    setTimeout(function() {
                        $(".loading-upload").addClass("hide");   
                        $(".button-confirm").show();
                    }, 10000);
                });
            });
        </script>
        <script>
            $(document).ready(function() {
                $(".button-confirm").on("click", function() {
                    $(".loading-confirm").removeClass("hide2");
                    $(".btn-text").hide();
                    setTimeout(function() {
                        $(".loading-confirm").addClass("hide2");
                        $(".btn-text").show();
                    }, 3000);
                });
            });
        </script>

<!-- Footer JS -->
@component("components.footerJS_page")
@endcomponent