<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | @yield('title')</title>
    <meta name="author" content="David Grzyb">
    <meta name="description" content="">

    @include('layout.header')
    
</head>
<body class="bg-gray-100 font-family-karla flex">

    @include('layout.nav')
    
    <div class="w-full flex flex-col h-screen overflow-y-hidden">
        <!-- Desktop Header -->
        <header class="w-full items-center bg-blue-ticket py-4 pr-8 hidden sm:flex">
            <div class="w-1/2"></div>
            <div x-data="{ isOpen: false }" class="relative w-1/2 flex justify-end">
                <div @click="isOpen = !isOpen" class="space-x-2 flex flex-row items-center">
                    <span class="text-white cursor-pointer font-lato text-sm">
                        {{ Auth::user()->name }}
                    </span>
                    <button class="relative flex items-center justify-center z-10 w-8 h-8 rounded-full overflow-hidden border-4 border-white hover:border-gray-300 focus:border-gray-300 focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                            width="28" height="28"
                            viewBox="0 0 172 172"
                            style=" fill:#000000;">
                            <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M86,17.2c-37.92867,0 -68.8,30.87133 -68.8,68.8c0,37.92867 30.87133,68.8 68.8,68.8c14.64823,0 28.18908,-4.69316 39.29349,-12.50808c2.59128,-1.82132 3.21546,-5.39843 1.39414,-7.98971c-1.82132,-2.59128 -5.39843,-3.21546 -7.98971,-1.39414c-9.29479,6.54135 -20.49121,10.42526 -32.69792,10.42526c-31.73133,0 -57.33333,-25.60201 -57.33333,-57.33333c0,-31.73133 25.60201,-57.33333 57.33333,-57.33333c12.20671,0 23.40313,3.8839 32.69792,10.42526c2.59128,1.82132 6.1684,1.19714 7.98971,-1.39414c1.82132,-2.59128 1.19714,-6.1684 -1.39414,-7.98971c-11.10441,-7.81491 -24.64527,-12.50807 -39.29349,-12.50807zM131.81067,57.27734c-2.33302,0.00061 -4.43306,1.41473 -5.31096,3.57628c-0.8779,2.16155 -0.3586,4.6395 1.31331,6.26668l13.14636,13.14636h-60.69271c-2.06765,-0.02924 -3.99087,1.05709 -5.03322,2.843c-1.04236,1.78592 -1.04236,3.99474 0,5.78066c1.04236,1.78592 2.96558,2.87225 5.03322,2.843h60.69271l-13.14636,13.14636c-1.49778,1.43802 -2.10113,3.5734 -1.57735,5.5826c0.52378,2.0092 2.09284,3.57826 4.10204,4.10204c2.0092,0.52378 4.14458,-0.07957 5.5826,-1.57735l22.42943,-22.42942c1.42382,-1.08614 2.25843,-2.77513 2.25623,-4.56593c-0.0022,-1.7908 -0.84095,-3.47774 -2.26743,-4.56038l-22.41823,-22.41823c-1.07942,-1.10959 -2.56163,-1.73559 -4.10964,-1.73568z"></path></g></g>
                        </svg>
                    </button>
                </div>
                <button x-show="isOpen" @click="isOpen = false" class="h-full w-full fixed inset-0 cursor-default"></button>
                <div x-show="isOpen" class="absolute w-30 bg-white rounded-lg shadow-lg py-2 mt-10">
                    <a href="/profile" class="block px-4 py-2 account-link hover:text-white">Profile</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                        <button type="submit" href="/" class="block px-4 py-2 pr-12 account-link hover:text-white">Sign Out</button>
                    </form>
                </div>
            </div>
        </header>

        <!-- Mobile Header & Nav -->
        <header x-data="{ isOpen: false }" class="w-full bg-white py-5 px-6 sm:hidden">
            <div class="flex items-center justify-between">
                <button @click="isOpen = !isOpen" class="realtive z-10 w-12 h-12">
                    <img class="" src="{{ asset('mahardika_ticket/dist/img/logo9.png') }}">
                </button>
                <a href="/home" class="text-black text-3xl font-semibold uppercase hover:text-gray-300">Admin</a>
                <button @click="isOpen = !isOpen" class="text-black text-3xl focus:outline-none">
                    <i x-show="!isOpen" class="fas fa-bars"></i>
                    <i x-show="isOpen" class="fas fa-times"></i>
                </button>
            </div>

            <!-- Dropdown Nav -->
            <nav :class="isOpen ? 'flex': 'hidden'" class="flex flex-col pt-4 font-semibold">
                <a href="/home" class="flex items-center text-black opacity-75 hover:opacity-100 py-2 pl-4 nav-item hover:bg-indigo-600 {{ request()->is('dashboard') ? 'active' : ''}}">
                    <i class="fas fa-tachometer-alt mr-3"></i>
                    Dashboard
                </a>
                <a href="/blog" class="flex items-center text-black opacity-75 hover:opacity-100 py-2 pl-4 nav-item hover:bg-indigo-600 {{ request()->is('blog') ? 'active' : ''}}">
                    <i class="fas fa-newspaper mr-3"></i>
                    Blog
                </a>
                <a href="/ticket" class="flex items-center text-black opacity-75 hover:opacity-100 py-2 pl-4 nav-item hover:bg-indigo-600 {{ request()->is('ticket') ? 'active' : ''}}">
                    <i class="fas fa-ticket-alt mr-3"></i>
                    Ticket Film
                </a>
                {{-- <a href="tables.html" class="flex items-center text-black opacity-75 hover:opacity-100 py-2 pl-4 nav-item hover:bg-indigo-600">
                    <i class="fas fa-table mr-3"></i>
                    Tables
                </a>
                <a href="forms.html" class="flex items-center text-black opacity-75 hover:opacity-100 py-2 pl-4 nav-item hover:bg-indigo-600">
                    <i class="fas fa-align-left mr-3"></i>
                    Forms
                </a> --}}
                <a href="/akun" class="flex items-center text-black opacity-75 hover:opacity-100 py-2 pl-4 nav-item hover:bg-indigo-600 {{ request()->is('akun') ? 'active' : ''}}">
                    <i class="fas fa-user mr-3"></i>
                    Akun
                </a>
                <a href="/calendar" class="flex items-center text-black opacity-75 hover:opacity-100 py-2 pl-4 nav-item hover:bg-indigo-600 {{ request()->is('calendar') ? 'active' : ''}}">
                    <i class="fas fa-calendar mr-3"></i>
                    Calendar
                </a>
                {{-- <a href="#" class="flex items-center text-black opacity-75 hover:opacity-100 py-2 pl-4 nav-item hover:bg-indigo-600">
                    <i class="fas fa-cogs mr-3"></i>
                    Support
                </a>
                <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item hover:bg-indigo-600">
                    <i class="fas fa-user mr-3"></i>
                    My Account
                </a> --}}
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                    <button type="submit" class="font-semibold w-full flex items-center text-black opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                        <i class="fas fa-sign-out-alt mr-3"></i>
                        Sign Out
                    </button>
                </form>
            </nav>
        </header>
    
        <div class="w-full overflow-x-hidden border-t flex flex-col">
            <main class="w-full flex-grow p-6 space-y-1">
                <div class="flex justify-between">
                    <h1 class="text-3xl font-bold text-black mb-3">
                        @yield('title')
                    </h1>
                    <p class="text-sm text-gray-500 pt-3 pr-10">
                        Home / @yield('title')
                    </p>
                </div>

                @yield('content')
                
            </main>
    
            <footer class="w-full bg-blue-ticket text-right p-4">
                <a target="_blank" href="#" class="no-underline text-white">
                    © PT. Mahardika Solusi Teknologi. 2020.
                </a>
            </footer>
        </div>
        
    </div>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    <!-- ChartJS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>

    <script>
        var chartOne = document.getElementById('chartOne');
        var myChart = new Chart(chartOne, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        var chartTwo = document.getElementById('chartTwo');
        var myLineChart = new Chart(chartTwo, {
            type: 'line',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
    <script> 
        const button = document.getElementById('buttonmodal')
        const closebutton = document.getElementById('closebutton')
        const modal = document.getElementById('modal')
    
        button.addEventListener('click',()=>modal.classList.add('scale-100'))
        closebutton.addEventListener('click',()=>modal.classList.remove('scale-100'))
    </script>

    {{-- Data Tables
    <script>
        $(document).ready( function () {
            $('.data').DataTable(); 
        } );
    </script>

    {{-- check all --}}
    {{-- <script>
        $(function(e) {
        $("#checkAll").click(function(){
            $('input:checkbox').not(this).prop('checked', this.checked);

        })
        })
    </script> --}}


</body>
</html>