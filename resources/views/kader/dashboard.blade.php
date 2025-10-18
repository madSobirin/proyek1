<x-app>
    <x-slot:title>Dashboard - Sistem Posyandu Modern</x-slot:title>

    <div class="overlay" id="overlay"></div>


    <div class="flex">
        <!-- Sidebar/Navbar -->
        <div class="sidebar w-64 bg-blue-800 text-white h-screen fixed">
            <div class="p-4 border-b border-blue-700">
                <h1 class="text-xl font-bold">POSYANDU MELATI</h1>
                <p class="text-blue-200 text-sm">Sistem Manajemen Terpadu</p>
            </div>

            <div class="p-4 flex items-center border-b border-blue-700">
                <div class="rounded-full w-12 h-12 bg-blue-600 flex items-center justify-center">
                    <i class="fas fa-user-md text-white"></i>
                </div>
                <div class="ml-3">
                    <p class="font-medium">Admin Posyandu</p>
                    <p class="text-xs text-blue-200">Kader Wilayah</p>
                </div>
            </div>

            <nav class="mt-4">
                <div>
                    <a href="#" class="flex items-center p-3 bg-blue-600 text-white rounded-lg mx-2 mb-1">
                        <i class="fas fa-tachometer-alt w-5"></i>
                        <span class="ml-3">Dashboard</span>
                    </a>

                    <a href="#"
                        class="flex items-center p-3 text-blue-200 hover:bg-blue-700 hover:text-white rounded-lg mx-2 mb-1">
                        <i class="fas fa-baby w-5"></i>
                        <span class="ml-3">Data Balita</span>
                    </a>

                    <a href="#"
                        class="flex items-center p-3 text-blue-200 hover:bg-blue-700 hover:text-white rounded-lg mx-2 mb-1">
                        <i class="fas fa-female w-5"></i>
                        <span class="ml-3">Data Ibu Hamil</span>
                    </a>

                    <a href="#"
                        class="flex items-center p-3 text-blue-200 hover:bg-blue-700 hover:text-white rounded-lg mx-2 mb-1">
                        <i class="fas fa-stethoscope w-5"></i>
                        <span class="ml-3">Pemeriksaan</span>
                    </a>

                    <a href="#"
                        class="flex items-center p-3 text-blue-200 hover:bg-blue-700 hover:text-white rounded-lg mx-2 mb-1">
                        <i class="fas fa-syringe w-5"></i>
                        <span class="ml-3">Imunisasi</span>
                    </a>

                    <a href="#"
                        class="flex items-center p-3 text-blue-200 hover:bg-blue-700 hover:text-white rounded-lg mx-2 mb-1">
                        <i class="fas fa-calendar-alt w-5"></i>
                        <span class="ml-3">Jadwal Posyandu</span>
                    </a>

                    <a href="#"
                        class="flex items-center p-3 text-blue-200 hover:bg-blue-700 hover:text-white rounded-lg mx-2 mb-1">
                        <i class="fas fa-chart-bar w-5"></i>
                        <span class="ml-3">Laporan</span>
                    </a>

                    <a href="#"
                        class="flex items-center p-3 text-blue-200 hover:bg-blue-700 hover:text-white rounded-lg mx-2 mb-1">
                        <i class="fas fa-users w-5"></i>
                        <span class="ml-3">Data Kader</span>
                    </a>
                </div>
            </nav>

            <div class="absolute bottom-0 w-full p-4 border-t border-blue-700">
                <div class="flex space-x-4 mb-4">
                    <a href="#"
                        class="flex-1 text-center bg-blue-700 hover:bg-blue-600 text-white py-2 rounded-lg">
                        <i class="fas fa-cog"></i>
                    </a>
                    <a href="#"
                        class="flex-1 text-center bg-blue-700 hover:bg-blue-600 text-white py-2 rounded-lg">
                        <i class="fas fa-question-circle"></i>
                    </a>
                </div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="flex items-center justify-center w-full bg-red-600 hover:bg-red-700 text-white rounded-lg p-3">
                        <i class="fas fa-sign-out-alt w-5"></i>
                        <span class="ml-3">Logout</span>
                    </button>
                </form>
            </div>
        </div>

        <!-- Main Content -->
        <div class="ml-0 md:ml-64 flex-1 min-h-screen bg-gray-50">
            <header class="bg-white shadow-sm p-4 flex justify-between items-center">
                <button id="menu-toggle" class="md:hidden text-gray-600">
                    <i class="fas fa-bars text-xl"></i>
                </button>

                <div class="relative mx-4 flex-1 max-w-xl">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class="fas fa-search text-gray-400"></i>
                    </div>
                    <input type="text"
                        class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Cari data balita, ibu hamil, atau jadwal..." />
                </div>

                <div class="flex items-center space-x-4">
                    <button class="p-2 rounded-full hover:bg-gray-100 relative">
                        <i class="fas fa-bell text-gray-600"></i>
                        <span class="absolute top-0 right-0 bg-red-500 rounded-full w-3 h-3"></span>
                    </button>

                    <button class="p-2 rounded-full hover:bg-gray-100">
                        <i class="fas fa-envelope text-gray-600"></i>
                    </button>

                    <div class="ml-2 relative">
                        <button class="flex items-center focus:outline-none">
                            <div class="rounded-full w-10 h-10 bg-blue-600 flex items-center justify-center text-white">
                                <i class="fas fa-user-md"></i>
                            </div>
                            <span class="ml-2 text-gray-700 hidden md:block">Admin Posyandu</span>
                            <i class="fas fa-chevron-down ml-1 text-gray-600 text-xs hidden md:block"></i>
                        </button>
                    </div>
                </div>
            </header>

            <main class="p-4 md:p-6">
                <!-- Header Dashboard -->
                <div class="mb-6">
                    <h1 class="text-2xl font-bold text-gray-800 flex items-center">
                        <i class="fas fa-tachometer-alt mr-3 text-blue-600"></i>
                        Dashboard Posyandu
                    </h1>
                    <p class="text-gray-600 mt-1 flex items-center">
                        <i class="fas fa-info-circle mr-2 text-blue-500"></i>
                        Ringkasan data dan aktivitas posyandu terbaru
                    </p>
                </div>

                {{-- Statistik Card --}}
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6 mb-6">
                    <div class="bg-white rounded-xl p-4 shadow-md border border-gray-100">
                        <div class="flex items-center">
                            <div class="rounded-lg bg-blue-100 p-3">
                                <i class="fas fa-baby text-2xl text-blue-600"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-gray-500 text-sm">Total Balita</p>
                                <h3 class="text-2xl font-bold">142</h3>
                            </div>
                        </div>
                        <div class="mt-2 flex items-center">
                            <i class="fas fa-arrow-up text-green-500 mr-1"></i>
                            <p class="text-xs text-green-500">5 dari bulan lalu</p>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl p-4 shadow-md border border-gray-100">
                        <div class="flex items-center">
                            <div class="rounded-lg bg-green-100 p-3">
                                <i class="fas fa-female text-2xl text-green-600"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-gray-500 text-sm">Ibu Hamil</p>
                                <h3 class="text-2xl font-bold">28</h3>
                            </div>
                        </div>
                        <div class="mt-2 flex items-center">
                            <i class="fas fa-arrow-up text-green-500 mr-1"></i>
                            <p class="text-xs text-green-500">2 dari bulan lalu</p>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl p-4 shadow-md border border-gray-100">
                        <div class="flex items-center">
                            <div class="rounded-lg bg-yellow-100 p-3">
                                <i class="fas fa-weight text-2xl text-yellow-600"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-gray-500 text-sm">Gizi Kurang</p>
                                <h3 class="text-2xl font-bold">8</h3>
                            </div>
                        </div>
                        <div class="mt-2 flex items-center">
                            <i class="fas fa-arrow-down text-red-500 mr-1"></i>
                            <p class="text-xs text-red-500">3 dari bulan lalu</p>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl p-4 shadow-md border border-gray-100">
                        <div class="flex items-center">
                            <div class="rounded-lg bg-purple-100 p-3">
                                <i class="fas fa-calendar-check text-2xl text-purple-600"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-gray-500 text-sm">Kegiatan Bulan Ini</p>
                                <h3 class="text-2xl font-bold">5</h3>
                            </div>
                        </div>
                        <div class="mt-2 flex items-center">
                            <i class="fas fa-info-circle text-blue-500 mr-1"></i>
                            <p class="text-xs text-gray-500">2 pemeriksaan, 3 penyuluhan</p>
                        </div>
                    </div>
                </div>

                {{-- Quick Actions --}}
                <div class="bg-white rounded-xl p-4 md:p-6 shadow-md border border-gray-100 mb-6">
                    <h2 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                        <i class="fas fa-bolt mr-2 text-yellow-500"></i>
                        Akses Cepat
                    </h2>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        <a href="#"
                            class="bg-blue-50 hover:bg-blue-100 rounded-lg p-4 text-center transition-colors">
                            <i class="fas fa-plus-circle text-blue-600 text-2xl mb-2"></i>
                            <p class="text-sm font-medium text-gray-700">Tambah Balita</p>
                        </a>
                        <a href="#"
                            class="bg-green-50 hover:bg-green-100 rounded-lg p-4 text-center transition-colors">
                            <i class="fas fa-notes-medical text-green-600 text-2xl mb-2"></i>
                            <p class="text-sm font-medium text-gray-700">Pemeriksaan</p>
                        </a>
                        <a href="#"
                            class="bg-purple-50 hover:bg-purple-100 rounded-lg p-4 text-center transition-colors">
                            <i class="fas fa-syringe text-purple-600 text-2xl mb-2"></i>
                            <p class="text-sm font-medium text-gray-700">Imunisasi</p>
                        </a>
                        <a href="#"
                            class="bg-orange-50 hover:bg-orange-100 rounded-lg p-4 text-center transition-colors">
                            <i class="fas fa-file-pdf text-orange-600 text-2xl mb-2"></i>
                            <p class="text-sm font-medium text-gray-700">Laporan</p>
                        </a>
                    </div>
                </div>

                {{-- Chart dan Aktivitas --}}
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
                    <div class="bg-white rounded-xl p-4 md:p-6 shadow-md border border-gray-100">
                        <h2 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                            <i class="fas fa-chart-pie mr-2 text-blue-600"></i>
                            Status Gizi Balita
                        </h2>
                        <div class="h-64 flex items-center justify-center bg-gray-50 rounded-lg">
                            <div class="text-center">
                                <i class="fas fa-chart-bar text-4xl text-gray-400 mb-2"></i>
                                <p class="text-gray-500">Grafik Status Gizi</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl p-4 md:p-6 shadow-md border border-gray-100">
                        <h2 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                            <i class="fas fa-bell mr-2 text-red-500"></i>
                            Aktivitas Terbaru
                        </h2>
                        <div class="space-y-4">
                            <div class="flex items-start p-3 bg-blue-50 rounded-lg">
                                <i class="fas fa-baby text-blue-600 mt-1 mr-3"></i>
                                <div class="flex-1">
                                    <p class="font-medium">Pemeriksaan balita baru</p>
                                    <p class="text-sm text-gray-600">Ahmad Sutisna - 20 Sep 2023</p>
                                </div>
                                <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full">Selesai</span>
                            </div>
                            <div class="flex items-start p-3 bg-yellow-50 rounded-lg">
                                <i class="fas fa-syringe text-yellow-600 mt-1 mr-3"></i>
                                <div class="flex-1">
                                    <p class="font-medium">Jadwal imunisasi mendatang</p>
                                    <p class="text-sm text-gray-600">25 Balita - 25 Sep 2023</p>
                                </div>
                                <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full">Menunggu</span>
                            </div>
                            <div class="flex items-start p-3 bg-green-50 rounded-lg">
                                <i class="fas fa-female text-green-600 mt-1 mr-3"></i>
                                <div class="flex-1">
                                    <p class="font-medium">Pemeriksaan ibu hamil</p>
                                    <p class="text-sm text-gray-600">Siti Rahayu - 19 Sep 2023</p>
                                </div>
                                <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full">Selesai</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Jadwal Mendatang --}}
                <div class="bg-white rounded-xl p-4 md:p-6 shadow-md border border-gray-100">
                    <h2 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                        <i class="fas fa-calendar-alt mr-2 text-purple-600"></i>
                        Jadwal Mendatang
                    </h2>
                    <div class="space-y-4">
                        <div
                            class="flex items-center p-4 border border-gray-200 rounded-lg hover:bg-blue-50 transition-colors">
                            <div
                                class="bg-blue-600 text-white rounded-lg w-12 h-12 flex flex-col items-center justify-center">
                                <span class="text-xs">SEP</span>
                                <span class="font-bold">25</span>
                            </div>
                            <div class="ml-4 flex-1">
                                <h3 class="font-medium flex items-center">
                                    <i class="fas fa-baby mr-2 text-blue-600"></i>
                                    Posyandu Balita Rutin
                                </h3>
                                <p class="text-sm text-gray-600 flex items-center">
                                    <i class="fas fa-clock mr-1 text-gray-400"></i>
                                    08:00 - 12:00 •
                                    <i class="fas fa-map-marker-alt ml-2 mr-1 text-gray-400"></i>
                                    Balai Desa
                                </p>
                            </div>
                            <button class="text-blue-600 hover:text-blue-800 text-sm font-medium flex items-center">
                                Detail
                                <i class="fas fa-chevron-right ml-1 text-xs"></i>
                            </button>
                        </div>
                        <div
                            class="flex items-center p-4 border border-gray-200 rounded-lg hover:bg-green-50 transition-colors">
                            <div
                                class="bg-green-600 text-white rounded-lg w-12 h-12 flex flex-col items-center justify-center">
                                <span class="text-xs">SEP</span>
                                <span class="font-bold">28</span>
                            </div>
                            <div class="ml-4 flex-1">
                                <h3 class="font-medium flex items-center">
                                    <i class="fas fa-female mr-2 text-green-600"></i>
                                    Kelas Ibu Hamil
                                </h3>
                                <p class="text-sm text-gray-600 flex items-center">
                                    <i class="fas fa-clock mr-1 text-gray-400"></i>
                                    09:00 - 11:00 •
                                    <i class="fas fa-map-marker-alt ml-2 mr-1 text-gray-400"></i>
                                    Posyandu Melati
                                </p>
                            </div>
                            <button class="text-green-600 hover:text-green-800 text-sm font-medium flex items-center">
                                Detail
                                <i class="fas fa-chevron-right ml-1 text-xs"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const menuToggle = document.getElementById('menu-toggle');
            const sidebar = document.querySelector('.sidebar');
            const overlay = document.getElementById('overlay');

            if (menuToggle) {
                menuToggle.addEventListener('click', function() {
                    sidebar.classList.toggle('-translate-x-full');
                    if (overlay) {
                        overlay.classList.toggle('hidden');
                    }
                });
            }

            if (overlay) {
                overlay.addEventListener('click', function() {
                    sidebar.classList.add('-translate-x-full');
                    overlay.classList.add('hidden');
                });
            }
        });
    </script>
</x-app>
