<!-- SIDEBAR -->
<aside id="sidebar"
    class="fixed top-0 left-0 w-64 h-screen bg-posyanduDark text-white transform -translate-x-full md:translate-x-0 transition-transform duration-300 z-40">
    <div class="p-4 border-b border-white">
        <div class="flex items-center space-x-3">
            <img src="{{ asset('img/elsimil.png') }}" alt="logo Sipos" class="w-13 h-13 object-contain">
            <h1 class="text-xl font-bold text-white">SIPOS</h1>
        </div>
        <p class="text-white text-sm">Sistem Informasi Posyandu</p>
    </div>

    <div class="p-4 flex items-center border-b border-white">
        <div class="rounded-full w-12 h-12 bg-posyanduu flex items-center justify-center">
            <span class="font-bold">
                {{ collect(explode(' ', Auth::user()->name))->map(fn($n) => strtoupper($n[0]))->join('') }}
            </span>
        </div>
        <div class="ml-3">
            <p class="font-medium">{{ Auth::user()->name }}</p>
        </div>
    </div>

    <nav class="mt-4">
        <a href="{{ url('/') }}" class="flex items-center p-3 bg-posyanduu text-white ">
            <i class="fas fa-home w-5"></i>
            <span class="ml-3">Dashboard</span>
        </a>
        <a href="{{ url('/balita') }}" class="flex items-center p-3 text-gray-300 hover:bg-posyanduu hover:text-white ">
            <i class="fas fa-baby w-5"></i>
            <span class="ml-3">Data Peserta</span>
        </a>
        <a href="{{ url('/pemeriksaan') }}"
            class="flex items-center p-3 text-gray-300 hover:bg-posyanduu hover:text-white ">
            <i class="fas fa-stethoscope w-5"></i>
            <span class="ml-3">Pemeriksaan</span>
        </a>
    </nav>

    <div class="absolute bottom-0 w-full p-4 border-t border-white">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit"
                class="flex items-center w-full text-gray-300 hover:bg-posyanduu hover:text-white rounded p-3">
                <i class="fas fa-sign-out-alt w-5"></i>
                <span class="ml-3">Logout</span>
            </button>
        </form>
    </div>
</aside>

<!-- Overlay untuk mobile -->
<div id="overlay" class="fixed inset-0 bg-transparent bg-opacity-20 hidden z-30"></div>

<!-- HEADER -->
<header class="fixed top-0 left-0 right-0 bg-gray-100 shadow flex justify-between items-center md:pl-64">
    <!-- Tombol hamburger untuk mobile -->
    <button id="menu-btn" class="md:hidden p-2 text-gray-600 ">
        <i class="fa-solid fa-bars fa-xl"></i>
    </button>
    <a href="#"
        class="flex items-center space-x-2 ml-auto border-b border-white p-2 hover:bg-gray-50 transition rounded-lg">
        <div class="flex items-center space-x-1">
            <h1 class="text-md font-bold text-gray-600">
                {{ Auth::user()->role }}
            </h1>
        </div>
        <div class="rounded-full w-10 h-10 bg-posyanduu flex items-center justify-center">
            <span class="font-bold text-white">
                {{ collect(explode(' ', Auth::user()->name))->map(fn($n) => strtoupper($n[0]))->join('') }}
            </span>
        </div>
    </a>
</header>
