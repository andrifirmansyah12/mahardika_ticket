<nav id="header" class="fixed w-full z-30 top-0 text-black bg-white border-b-2 border-gray-300">
  <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
    <div class="flex items-center space-x-1 p-2">
      <button class="relative z-10 w-8 h-8">
          <img class="" src="{{ asset('mahardika_ticket/dist/img/logo9.png') }}">
      </button>
      <a href="#" class="font-sans toggleColour text-black no-underline hover:no-underline text-2xl lg:text-2xl">
        Mahardika Ticket
      </a>
    </div>
        
    @yield('nav')
    
  </div>
  <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
</nav>