<x-app>
    <x-slot:title>Dashboard Admin</x-slot:title>

    <h2 class="text-2xl font-bold text-gray-800 mb-6">Dashboard Admin</h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-lg font-semibold text-gray-700">Jumlah Balita</h3>
            <p class="mt-2 text-3xl font-bold text-blue-600">120</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-lg font-semibold text-gray-700">Jumlah Ibu Hamil</h3>
            <p class="mt-2 text-3xl font-bold text-pink-600">40</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-lg font-semibold text-gray-700">Total Kader</h3>
            <p class="mt-2 text-3xl font-bold text-green-600">10</p>
        </div>
    </div>

    <div class="mt-8 bg-white p-6 rounded-lg shadow-md">
        <h3 class="text-lg font-semibold text-gray-700 mb-4">Manajemen</h3>
        <ul class="space-y-2">
            <li><a href="#" class="text-blue-600 hover:underline">Kelola Data Balita</a></li>
            <li><a href="#" class="text-blue-600 hover:underline">Kelola Data Ibu Hamil</a></li>
            <li><a href="#" class="text-blue-600 hover:underline">Kelola Jadwal Posyandu</a></li>
            <li><a href="#" class="text-blue-600 hover:underline">Unduh Laporan</a></li>
        </ul>
        <div class="mt-8">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700">
                    Logout
                </button>
            </form>
        </div>

    </div>
</x-app>
