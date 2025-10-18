<!-- SIDEBAR -->
<aside class="fixed top-0 left-0 w-64 h-screen bg-posyanduDark text-white">
    <div class="p-4 border-b border-white">
        <div class="flex items-center space-x-3">
            <img src="img/elsimil.png" alt="logo Sipos" class="w-13 h-13 object-contain">
            <h1 class="text-xl font-bold text-white">SIPOS</h1>
        </div>
        <p class="text-white text-sm">Sistem Informasi Posyandu</p>
    </div>

    <div class="p-4 flex items-center border-b border-white">
        <div class="rounded-full w-12 h-12 bg-posyanduu flex items-center justify-center">
            <span class="font-bold">KA</span>
        </div>
        <div class="ml-3">
            <p class="font-medium">Kader Posyandu</p>
        </div>
    </div>

    <nav class="mt-4">
        <a href="{{ url('/') }}" class="flex items-center p-3 bg-posyanduu text-white rounded">
            <i class="fas fa-home w-5"></i>
            <span class="ml-3">Dashboard</span>
        </a>

        <a href="{{ url('/balita') }}"
            class="flex items-center p-3 text-gray-300 hover:bg-posyanduu hover:text-white rounded">
            <i class="fas fa-baby w-5"></i>
            <span class="ml-3">Data Peserta</span>
        </a>

        <a href="{{ url('/pemeriksaan') }}"
            class="flex items-center p-3 text-gray-300 hover:bg-posyanduu hover:text-white rounded">
            <i class="fas fa-stethoscope w-5"></i>
            <span class="ml-3">Pemeriksaan</span>
        </a>
    </nav>

    <div class="absolute bottom-0 w-full p-4 border-t border-white">
        <a href="{{ url('/logout') }}"
            class="flex items-center p-3 text-gray-300 hover:bg-posyanduu hover:text-white rounded">
            <i class="fas fa-sign-out-alt w-5"></i>
            <span class="ml-3">Logout</span>
        </a>
    </div>
</aside>

<!-- HEADER (KONTEN KANAN) -->
<header class="fixed top-0 left-64 right-0 bg-white border-b border-gray-200 shadow z-10">
    <div class="p-2 flex justify-end border-b border-white ">
        <div class="rounded-full w-10 h-10 bg-posyanduu flex items-center justify-center">
            <span class="font-bold text-white">KA</span>
        </div>
        <div class="flex justify-end items-center px-2">
            <h1 class="text-md font-bold text-gray-600">Admin</h1>
            <i class="fas fa-chevron-down flex ml-1 text-gray-600 text-xs md:block"></i>
        </div>
</header>
