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
                <a class="inline-block py-2 px-1 text-black font-bold font-sans no-underline" href="/contact">Contact</a>
              </li>
            </ul>
          </div>
        @endsection
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
                                <div class="p-6 flex flex-wrap">
                                    <div class="w-full md:w-1/2 md:pr-32 order-3 md:order-1">
                                        <div class="max-w-md md:float-right md:text-right leading-loose tracking-tight md:sticky md:top-0 ">
                                            <p class="font-bold my-2">Previous Posts</p>
                            
                                            <ul class="flex flex-wrap justify-between flex-col">
                                                <li><a href="#" id="at" class="nav">Previous blog posts links</a></li>
                                                <li><a href="#" id="at" class="nav">A diam sollicitudin tempor id eue</a></li>
                                                <li><a href="#" id="at" class="nav">Lectus vestibulum mattis ullamcorper velit sed ullamcorper</a></li>
                                                <li><a href="#" id="at" class="nav">Pulvinar etiam non quam lacus suspendisse faucibus</a></li>
                                            </ul>
                                            <a href="#" class="normal font-bold hover:font-bold">more...</a>
                                        </div>
                                    </div>
                                    <div class="w-full md:w-1/2 order-1 md:order-2">
                                        <div class="max-w-md leading-loose tracking-tight text-justify">
                                            <h1 class="font-bold my-2">Post Title</h1>
                            
                                            <p class="mb-8">This template is inspired by the amazing <a href="https://minimalissimo.shop/product/minimalist-writer-ii" target="_blank">https://minimalissimo.shop/product/minimalist-writer-ii</a> created by <a href="https://manuelmoreale.com/">Manuel Moreale</a>.</p>
                            
                                            <p class="mb-8">Lorem ipsum dolor sit amet, consectetur <a href="#">random link</a> adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vel risus commodo viverra maecenas accumsan lacus vel facilisis volutpat. Vitae aliquet nec ullamcorper sit. Nullam eget felis eget nunc lobortis mattis aliquam. In est ante in nibh mauris. Egestas congue quisque egestas diam in. Facilisi nullam vehicula ipsum a arcu. Nec nam aliquam sem et tortor consequat. Eget mi proin sed libero enim sed faucibus turpis in. Hac habitasse platea dictumst quisque. In aliquam sem fringilla ut. Gravida rutrum quisque non tellus orci ac auctor augue mauris. Accumsan lacus vel facilisis volutpat est velit egestas dui id. At tempor commodo ullamcorper a. Volutpat commodo sed egestas egestas fringilla. Vitae congue eu consequat ac.</p>
                            
                                            <p class="mb-8">Netus et malesuada fames ac turpis egestas sed. Sociis natoque penatibus et magnis dis. Pulvinar etiam non quam lacus suspendisse faucibus. Vulputate mi sit amet mauris commodo quis imperdiet massa tincidunt. Eget nullam non nisi est sit amet facilisis. Fusce ut placerat orci nulla pellentesque dignissim enim sit amet. Vulputate mi sit amet mauris commodo quis. Vestibulum mattis ullamcorper velit sed ullamcorper morbi tincidunt. Feugiat pretium nibh ipsum consequat nisl vel pretium lectus quam. Enim blandit volutpat maecenas volutpat blandit. Scelerisque fermentum dui faucibus in ornare. Ultricies tristique nulla aliquet enim tortor at auctor urna nunc. Id interdum velit laoreet id. Ut lectus arcu bibendum at varius vel pharetra vel turpis.</p>
                            
                                            <p class="mb-8">A diam sollicitudin tempor id eu. Lectus vestibulum mattis ullamcorper velit sed ullamcorper. Sit amet facilisis magna etiam tempor. Non diam phasellus vestibulum lorem sed risus. Leo vel fringilla est ullamcorper eget nulla facilisi etiam. Quam quisque id diam vel quam elementum pulvinar etiam. Eu volutpat odio facilisis mauris. Molestie ac feugiat sed lectus vestibulum mattis. In vitae turpis massa sed elementum tempus egestas sed sed. Sed id semper risus in hendrerit gravida rutrum quisque non. Quis lectus nulla at volutpat diam ut venenatis. Ultrices eros in cursus turpis massa tincidunt dui. Phasellus egestas tellus rutrum tellus pellentesque eu tincidunt tortor aliquam. Lobortis mattis aliquam faucibus purus. Egestas sed tempus urna et pharetra pharetra. Tellus pellentesque eu tincidunt tortor aliquam nulla.</p>
                            
                                            <p class="mb-8">Cras fermentum odio eu feugiat pretium nibh ipsum. Integer vitae justo eget magna fermentum iaculis eu non diam. Tellus molestie nunc non blandit massa enim nec dui. Ullamcorper morbi tincidunt ornare massa eget egestas. Orci a scelerisque purus semper eget duis at tellus at. Consequat id porta nibh venenatis cras sed. Enim eu turpis egestas pretium. Mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Dui vivamus arcu felis bibendum. Eu consequat ac felis donec et odio. Ultrices gravida dictum fusce ut placerat orci nulla. Leo urna molestie at elementum eu facilisis. Vulputate mi sit amet mauris commodo. Eu consequat ac felis donec et odio pellentesque.</p>
                            
                                        </div>
                                    </div>
                            
                                    <div class="w-full md:w-1/2 md:pr-32 pt-12 md:pt-0 md:sticky md:bottom-0 order-4 md:order-3">    
                                    </div>

                                    <div class="w-full md:w-1/2 order-2 md:order-4">
                                        <div class="max-w-md leading-loose tracking-tight">
                                            <p class="font-bold my-4 md:my-12">About Me</p>
                            
                                            <p class="mb-8">Arcu risus quis varius quam quisque id diam vel. Consectetur adipiscing elit ut aliquam purus sit amet. Nibh tortor id aliquet lectus proin nibh. </p>
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