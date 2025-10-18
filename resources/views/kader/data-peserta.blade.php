<x-app-main title="Data Peserta">
    <main class="ml-2 md:ml-2">
        <div class="mb-6 flex justify-between items-center">
            <div>
                <h1 class="text-2xl font-bold text-gray-800">
                    Data Balita & Ibu Hamil
                </h1>
                <p class="text-gray-600">
                    Kelola data balita dan ibu hamil di posyandu
                </p>
            </div>
            <div class="flex space-x-2">
                <a href="{{ url('data/tambah') }}"
                    class="bg-button hover:bg-buttonhover transition-colors duration-200 text-white px-4 py-2 rounded-lg flex items-center">
                    <i class="fas fa-plus mr-2"></i> Tambah Data
                </a>

            </div>
        </div>

        <!-- Tabs -->
        <div class="bg-white rounded-xl shadow-md mb-6">
            <div class="border-b border-gray-200">
                <nav class="flex -mb-px">
                    <button id="balita-tab"
                        class="tab-button py-4 px-6 text-center border-b-2 border-posyanduu font-medium text-sm whitespace-nowrap text-posyanduu hover:text-buttonhover">
                        Data Balita
                    </button>
                    <button id="ibu-hamil-tab"
                        class="tab-button py-4 px-6 text-center border-b-2 border-posyanduu font-medium text-sm whitespace-nowrap text-posyanduu hover:text-buttonhover">
                        Data Ibu Hamil
                    </button>
                </nav>
            </div>
        </div>

        <!-- Data Balita Content -->
        <div id="balita-content" data-content class="active">
            <!-- Data Table -->
            <div class="bg-white rounded-xl p-4 md:p-6 shadow-md">
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="text-left border-b text-gray-600 text-sm">
                                <th class="pb-3 font-medium">
                                    NIK
                                </th>
                                <th class="pb-3 font-medium">
                                    Nama Balita
                                </th>
                                <th class="pb-3 font-medium">
                                    Usia
                                </th>
                                <th class="pb-3 font-medium">
                                    Jenis Kelamin
                                </th>
                                <th class="pb-3 font-medium">
                                    Alamat
                                </th>
                                <th class="pb-3 font-medium">
                                    Nama Orang Tua
                                </th>
                                <th class="pb-3 font-medium">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y text-gray-800">
                            <tr>
                                <td class="py-4">
                                    <div class="flex items-center">
                                        <div
                                            class="rounded-full w-10 h-10 bg-blue-100 flex items-center justify-center mr-3">
                                            <i class="fas fa-baby text-blue-500"></i>
                                        </div>
                                        <div>
                                            <p>
                                                3212192909030001
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-4">
                                    Ahmad Sutisna
                                </td>
                                <td class="py-4">2 tahun 3 bulan</td>
                                <td class="py-4">Laki-Laki</td>
                                <td class="py-4">
                                    Ds Sukadadi
                                </td>
                                <td class="py-4">Budi Santoso</td>
                                <td class="py-4">
                                    <div class="flex space-x-2">
                                        <button class="text-warning hover:text-yellow-600">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="text-danger hover:text-red-600">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="mt-6 flex flex-col md:flex-row justify-between items-center">
                    <p class="text-sm text-gray-600 mb-4 md:mb-0">
                        Menampilkan 4 dari 142 data balita
                    </p>
                    <div class="flex space-x-2">
                        <button class="px-3 py-1 rounded border border-gray-300 text-gray-600 hover:bg-gray-100">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="px-3 py-1 rounded border border-posyandu bg-posyandu text-white">
                            1
                        </button>
                        <button class="px-3 py-1 rounded border border-gray-300 text-gray-600 hover:bg-gray-100">
                            2
                        </button>
                        <button class="px-3 py-1 rounded border border-gray-300 text-gray-600 hover:bg-gray-100">
                            3
                        </button>
                        <button class="px-3 py-1 rounded border border-gray-300 text-gray-600 hover:bg-gray-100">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Data Ibu Hamil Content -->
        <div id="ibu-hamil-content" data-content>
            <!-- Data Table -->
            <div class="bg-white rounded-xl p-4 md:p-6 card-shadow">
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="text-left border-b text-gray-600 text-sm">
                                <th class="pb-3 font-medium">
                                    NIK
                                </th>
                                <th class="pb-3 font-medium">
                                    Nama Ibu Hamil
                                </th>
                                <th class="pb-3 font-medium">
                                    Nama Suami
                                </th>
                                <th class="pb-3 font-medium">
                                    Umur
                                </th>
                                <th class="pb-3 font-medium">
                                    Alamat
                                </th>
                                <th class="pb-3 font-medium">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y">
                            <tr>
                                <td class="py-4">
                                    <div class="flex items-center">
                                        <div
                                            class="rounded-full w-10 h-10 bg-purple-100 flex items-center justify-center mr-3">
                                            <i class="fas fa-female text-purple-500"></i>
                                        </div>
                                        <div>
                                            <p>
                                                3212192909030001
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-4">Rokenti</td>
                                <td class="py-4">Carudin</td>
                                </td>
                                <td class="py-4">39</td>
                                <td class="py-4">Arahan
                                </td>
                                <td class="py-4">
                                    <div class="flex space-x-2">
                                        <button class="text-warning hover:text-yellow-600">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="text-danger hover:text-red-600">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="mt-6 flex flex-col md:flex-row justify-between items-center">
                    <p class="text-sm text-gray-600 mb-4 md:mb-0">
                        Menampilkan 4 dari 28 data ibu hamil
                    </p>
                    <div class="flex space-x-2">
                        <button class="px-3 py-1 rounded border border-gray-300 text-gray-600 hover:bg-gray-100">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="px-3 py-1 rounded border border-posyandu bg-posyandu text-white">
                            1
                        </button>
                        <button class="px-3 py-1 rounded border border-gray-300 text-gray-600 hover:bg-gray-100">
                            2
                        </button>
                        <button class="px-3 py-1 rounded border border-gray-300 text-gray-600 hover:bg-gray-100">
                            3
                        </button>
                        <button class="px-3 py-1 rounded border border-gray-300 text-gray-600 hover:bg-gray-100">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-main>
