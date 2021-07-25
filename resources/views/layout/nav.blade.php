<aside class="relative bg-white h-screen w-64 hidden sm:block shadow-xl">
    <div class="flex items-center space-x-3 p-6">
        <button class="realtive z-10 w-12 h-12">
            <img class="" src="{{ asset('mahardika_ticket/dist/img/logo9.png') }}">
        </button>
        <a href="/home" class="text-black text-3xl font-semibold uppercase hover:text-gray-300">Admin</a>
    </div>
    <nav class="text-white text-base font-semibold pt-3">
        <a href="/home" class="flex items-center text-black opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-indigo-600 {{ request()->is('dashboard') ? 'active' : ''}}">
            <i class="fas fa-tachometer-alt mr-3"></i>
            Dashboard
        </a>
        <a href="/blog" class="flex items-center text-black opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-indigo-600 {{ request()->is('blog') ? 'active' : ''}}">
            <i class="fas fa-newspaper mr-3"></i>
            Blog
        </a>
        <a href="/ticket" class="flex items-center text-black opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-indigo-600 {{ request()->is('ticket') ? 'active' : ''}}">
            <i class="fas fa-ticket-alt mr-3"></i>
            Ticket Film
        </a>
        <a href="/akun" class="flex items-center text-black opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-indigo-600 {{ request()->is('akun') ? 'active' : ''}}">
            <i class="fas fa-user mr-3"></i>
            Akun
        </a>
        {{-- <a href="forms.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-indigo-600">
            <i class="fas fa-align-left mr-3"></i>
            Forms
        </a>
        <a href="tabs.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-indigo-600">
            <i class="fas fa-tablet-alt mr-3"></i>
            Tabbed Content
        </a> --}}
        <a href="/calendar" class="flex items-center text-black opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-indigo-600 {{ request()->is('calendar') ? 'active' : ''}}">
            <i class="fas fa-calendar mr-3"></i> 
            Calendar
        </a>
    </nav>
</aside>