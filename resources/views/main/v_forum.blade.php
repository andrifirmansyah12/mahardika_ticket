<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum | Mahardika Ticket</title>

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
	

	<!--Title-->
	<div class="text-center pt-32">
		<p class="text-sm md:text-base text-green-500 font-bold">{{ $blog->tanggal }} <span class="text-gray-900">/</span> {{ $blog->nama_tempat }}</p>
		{{-- <h1 class="text-green-500 font-bold break-normal text-3xl md:text-5xl">Welcome to  Mahardika Ticket</h1> --}}
	</div>

	<!--image-->
	<div class="container w-full max-w-6xl mx-auto bg-white bg-cover bg-center md:bg-top mt-4 rounded" style="background-image:url('{{ url('img-blog/' . $blog->foto)}}'); height: 75vh;"></div>
	
	<!--Container-->
	<div class="container max-w-5xl mx-auto -mt-16">
		<div class="mx-2 sm:mx-6">
			<div class="shadow mb-8 rounded-xl bg-white w-full p-8 md:p-24 text-xl md:text-2xl text-gray-800 leading-normal" style="font-family:Georgia,serif;">
				<!--Lead Para-->
				<p class="text-2xl md:text-3xl mb-5">
					{{ $blog->judul }}.
				</p>
				<blockquote class="border-l-4 border-green-500 italic my-8 pl-8 md:pl-12">
					{{ $blog->deskripsi }}.
				</blockquote>

				{{-- <p class="py-6">Example code block:</p>
				<pre class="bg-gray-900 rounded text-white font-mono text-base p-4">
					<code class="break-words whitespace-pre-wrap">
                        &lt;header class="site-header outer"&gt;
                        &lt;div class="inner"&gt;
                            &gt; "site-nav"
                        &lt;/div&gt;
                        &lt;/header&gt;
					</code>
				</pre>			 --}}
				<!--/ Post Content-->			
			</div>
		</div>
	</div>

	<div class="bg-white">
		<div class="container w-full max-w-6xl mx-auto px-2 py-8">
			<div class="flex flex-wrap -mx-2">
				<div class="w-full md:w-1/3 px-2 pb-12">
					<div class="h-full bg-white rounded overflow-hidden shadow-md hover:shadow-lg relative smooth">
						<a href="#" class="no-underline hover:no-underline">
								<img src="https://images.unsplash.com/photo-1600104654136-f6e2426ad471?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=751&q=80" class="h-48 object-cover object-top w-full rounded-t shadow-lg">
								<div class="p-6 h-auto md:h-48">	
									<p class="text-gray-600 text-xs md:text-sm">GETTING STARTED</p>
									<div class="font-bold text-xl text-gray-900">Lorem ipsum dolor sit amet.</div>
									<p class="text-gray-800 font-serif text-base mb-5">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula. 
									</p>
								</div>
								<div class="flex items-center justify-between inset-x-0 bottom-0 p-6">
									<img class="w-8 h-8 rounded-full mr-4" src="http://i.pravatar.cc/300" alt="Avatar of Author">
									<p class="text-gray-600 text-xs md:text-sm">2 MIN READ</p>
								</div>
						</a>
					</div>
				</div>
				<div class="w-full md:w-1/3 px-2 pb-12">
					<div class="h-full bg-white rounded overflow-hidden shadow-md hover:shadow-lg relative smooth">
						<a href="#" class="no-underline hover:no-underline">
								<img src="https://images.unsplash.com/photo-1629104300023-694ad6aa2431?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=750&q=80" class="h-48 object-cover object-top w-full rounded-t shadow">
								<div class="p-6 h-auto md:h-48">	
									<p class="text-gray-600 text-xs md:text-sm">UNDERWATER</p>
									<div class="font-bold text-xl text-gray-900">Biolumini algae diatomeae ecology.</div>
									<p class="text-gray-800 font-serif text-base mb-5">
										Lorem ipsum dolor sit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula. 
									</p>
								</div>
								<div class="flex items-center justify-between inset-x-0 bottom-0 p-6">
									<img class="w-8 h-8 rounded-full mr-4" src="http://i.pravatar.cc/300" alt="Avatar of Author">
									<p class="text-gray-600 text-xs md:text-sm">4 MIN READ</p>
								</div>
						</a>
					</div>
				</div>
				<div class="w-full md:w-1/3 px-2 pb-12">
					<div class="h-full bg-white rounded overflow-hidden shadow-md hover:shadow-lg relative smooth">
						<a href="#" class="no-underline hover:no-underline">
								<img src="https://images.unsplash.com/photo-1608869843129-3da551dcde5a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" class="h-48 object-cover object-top w-full rounded-t shadow">
								<div class="p-6 h-auto md:h-48">	
									<p class="text-gray-600 text-xs md:text-sm">FOREST</p>
									<div class="font-bold text-xl text-gray-900">What is life but a teardrop in the eye of infinity?</div>
									<p class="text-gray-800 font-serif text-base mb-5">
										Mollis pretium integer eros et dui orci, lectus nec elit sagittis neque. Dignissim ac nullam semper aliquet volutpat, ut scelerisque.
									</p>
								</div>
								<div class="flex items-center justify-between inset-x-0 bottom-0 p-6">
									<img class="w-8 h-8 rounded-full mr-4" src="http://i.pravatar.cc/300" alt="Avatar of Author">
									<p class="text-gray-600 text-xs md:text-sm">7 MIN READ</p>
								</div>
						</a>
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