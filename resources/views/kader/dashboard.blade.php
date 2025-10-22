<x-app-main :title="'Dashboard'">
    <main class="ml-2 md:ml-2">
        <h1 class="text-2xl font-bold text-gray-800">Dashboard</h1>
        <p class="text-gray-600 mb-6">haloo {{ Auth::user()->name }}, selamat datang di dashboard</p>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4 md:gap-6 mb-6">
            <div class="bg-white rounded-xl p-4 shadow-md">
                <div class="flex items-center">
                    <div class="rounded-lg bg-blue-100 p-3">
                        <i class="fas fa-baby text-2xl text-baby"></i>
                    </div>
                    <div class="ml-4">
                        <p class="text-gray-500 text-sm">
                            Total Balita
                        </p>
                        <h3 class="text-2xl font-bold">{{ $totalBalita }}</h3>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl p-4 shadow-md">
                <div class="flex items-center">
                    <div class="rounded-lg bg-green-100 p-3">
                        <i class="fas fa-female text-2xl text-success"></i>
                    </div>
                    <div class="ml-4">
                        <p class="text-gray-500 text-sm">
                            Ibu Hamil
                        </p>
                        <h3 class="text-2xl font-bold">{{ $totalIbuHamil }}</h3>
                    </div>
                </div>
            </div>
        </div>

        {{-- Chart Section --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
            <!-- Status Gizi Balita Chart -->
            <div class="bg-white rounded-xl p-4 md:p-6 shadow-md">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-lg font-bold text-gray-800">
                        Status Gizi Balita
                    </h2>
                </div>
                <div class="h-64">
                    <canvas id="giziChart"></canvas>
                </div>
            </div>

            <!-- Kondisi Ibu Hamil Chart -->
            <div class="bg-white rounded-xl p-4 md:p-6 shadow-md">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-lg font-bold text-gray-800">
                        Kondisi Ibu Hamil
                    </h2>
                </div>
                <div class="h-64">
                    <canvas id="ibuHamilChart"></canvas>
                </div>
            </div>
        </div>

        {{-- Schedule Jadwal --}}
        <div class="bg-white rounded-xl p-4 md:p-6 card-shadow">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-lg font-bold text-gray-800">
                    Jadwal Mendatang
                </h2>
            </div>

            <div class="space-y-4">
                <div class="flex items-center p-3 border border-gray-200 rounded-lg">
                    <div class="bg-posyandu text-white rounded-lg w-12 h-12 flex flex-col items-center justify-center">
                        <span class="font-bold">25</span>
                    </div>
                    <div class="ml-4 flex-1">
                        <h3 class="font-medium">
                            Posyandu Balita Rutin
                        </h3>
                        <p class="text-sm text-gray-600">
                            08:00 - 12:00 • Balai Desa
                        </p>
                    </div>
                    <button class="text-posyandu hover:text-posyanduDark text-sm">
                        Detail
                    </button>
                </div>

                <div class="flex items-center p-3 border border-gray-200 rounded-lg">
                    <div class="bg-success text-white rounded-lg w-12 h-12 flex flex-col items-center justify-center">
                        <span class="font-bold">27</span>
                    </div>
                    <div class="ml-4 flex-1">
                        <h3 class="font-medium">Kelas Ibu Hamil</h3>
                        <p class="text-sm text-gray-600">
                            13:00 - 15:00 • Aula Posyandu
                        </p>
                    </div>
                    <button class="text-posyandu hover:text-posyanduDark text-sm">
                        Detail
                    </button>
                </div>

                <div class="flex items-center p-3 border border-gray-200 rounded-lg">
                    <div class="bg-warning text-white rounded-lg w-12 h-12 flex flex-col items-center justify-center">
                        <span class="font-bold">02</span>
                    </div>
                    <div class="ml-4 flex-1">
                        <h3 class="font-medium">
                            Imunisasi Campak
                        </h3>
                        <p class="text-sm text-gray-600">
                            09:00 - 14:00 • Puskesmas
                        </p>
                    </div>
                    <button class="text-posyandu hover:text-posyanduDark text-sm">
                        Detail
                    </button>
                </div>
            </div>
        </div>
    </main>
</x-app-main>
