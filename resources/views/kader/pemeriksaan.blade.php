<x-app-main title="Pemeriksaan">
    <!-- Main -->
    <main>
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 mb-6">
            <!-- Kiri: Judul dan deskripsi -->
            <div class="flex-1">
                <h1 class="text-2xl font-bold text-gray-800">
                    Pemeriksaan & Jadwal Posyandu
                </h1>
                <p class="text-gray-600">
                    Kelola pemeriksaan dan jadwal kegiatan posyandu
                </p>
            </div>

            <!-- Kanan: Tombol aksi -->
            <div class="flex-shrink-0">
                <button
                    class="cursor-pointer bg-button hover:bg-buttonhover transition-colors duration-200 text-white px-4 py-2 rounded-lg flex items-center shadow-sm w-full md:w-auto justify-center md:justify-start">
                    <i class="fas fa-plus mr-2"></i>
                    Pemeriksaan Baru
                </button>
            </div>
        </div>

        <!-- Bagian Tabs -->
        <div x-data="{
            activeTab: 'pemeriksaan',
            underlineLeft: 0,
            underlineWidth: 0,
            updateUnderline($el) {
                this.underlineLeft = $el.offsetLeft;
                this.underlineWidth = $el.offsetWidth;
            }
        }" x-init="$nextTick(() => {
            let el = $refs.pemeriksaanTab;
            updateUnderline(el);
        })" class="bg-white rounded-xl card-shadow mb-6 p-4">
            <div class="border-b border-gray-200 relative overflow-hidden">
                <nav class="flex -mb-px justify-start">
                    <!-- Tab Pemeriksaan -->
                    <button x-ref="pemeriksaanTab" @click="activeTab = 'pemeriksaan'; updateUnderline($el)"
                        :class="activeTab === 'pemeriksaan' ? 'text-posyanduu' : 'text-gray-500 hover:text-gray-700'"
                        class="relative py-3 px-6 text-center font-medium text-sm whitespace-nowrap transition-all">
                        Pemeriksaan
                    </button>

                    <!-- Tab Jadwal -->
                    <button x-ref="jadwalTab" @click="activeTab = 'jadwal'; updateUnderline($el)"
                        :class="activeTab === 'jadwal' ? 'text-posyanduu' : 'text-gray-500 hover:text-gray-700'"
                        class="relative py-3 px-6 text-center font-medium text-sm whitespace-nowrap transition-all">
                        Jadwal Posyandu
                    </button>

                    <!-- Garis bawah animasi -->
                    <div class="absolute bottom-0 h-0.5 bg-posyanduu transition-all duration-300"
                        :style="`left: ${underlineLeft}px; width: ${underlineWidth}px;`">
                    </div>
                </nav>
            </div>

            <!-- Container konten di luar nav -->
            <div class="mt-6 bg-white rounded-xl border border-gray-200 shadow-sm p-6">
                <!-- Pemeriksaan -->
                <div x-show="activeTab === 'pemeriksaan'" x-transition>
                    <div class="overflow-x-auto">
                        <table class="min-w-full text-sm text-left text-gray-700 border border-gray-200 rounded-lg">
                            <thead class=" text-gray-600 ">
                                <tr>
                                    <th class="px-4 py-3">Tanggal Pemeriksaan</th>
                                    <th class="px-4 py-3">Jenis Pemeriksaan</th>
                                    <th class="px-4 py-3">Nama</th>
                                    <th class="px-4 py-3">Status Gizi</th>
                                    <th class="px-4 py-3 text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-t">
                                    <td class="py-3 px-4">
                                        20 Sep 2023<br /><span class="text-xs text-gray-500">08:30</span>
                                    </td>
                                    <td class="px-4 py-3 flex items-center gap-2">
                                        <div class="w-8 h-8 flex items-center justify-center rounded-full bg-blue-100">
                                            <i class="fas fa-baby text-blue-500 text-sm"></i>
                                        </div>
                                        <span>Pemeriksaan Balita</span>
                                    </td>

                                    <td class="px-4 py-3">Ahmad Sutisna</td>
                                    <td class="py-3 px-4">
                                        <span class="px-2 py-1 bg-green-100 text-green-500 text-xs rounded-full">Gizi
                                            baik</span>
                                    </td>
                                    <td class="px-4 py-3 text-center text-base">
                                        <button class="text-posyanduu hover:text-posyanduDark">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="text-warning hover:text-yellow-600">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="text-danger hover:text-red-600">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Jadwal -->
                <div x-show="activeTab === 'jadwal'" x-transition>
                    <div class="flex justify-between items-center">
                        <h1 class="text-xl font-bold text-gray-900">Kegiatan Mendatang</h1>
                        <a href="#" class="bg-button text-white px-4 py-2 rounded-md hover:bg-buttonhover"><i
                                class="fa-solid fa-calendar-plus mr-2"></i>Tambah
                            Jadwal</a>
                    </div>

                    <div class="flex items-center p-4 border border-gray-200 rounded-lg mt-4">
                        <div
                            class="bg-posyanduu text-white rounded-lg w-12 h-12 flex flex-col items-center justify-center">
                            <span class="font-bold">25</span>
                        </div>
                        <div class="ml-4 flex-1">
                            <h3 class="font-medium">
                                Posyandu Balita Rutin
                            </h3>
                            <p class="text-sm text-gray-600">
                                08:00 - 10:00 • Balai Desa
                            </p>
                        </div>
                        <div class="flex space-x-2">
                            <button class="text-posyanduu hover:text-posyanduDark">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="text-danger hover:text-red-600">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                    <div class="flex items-center p-4 border border-gray-200 rounded-lg mt-4">
                        <div class="bg-tggl text-white rounded-lg w-12 h-12 flex flex-col items-center justify-center">
                            <span class="font-bold">27</span>
                        </div>
                        <div class="ml-4 flex-1">
                            <h3 class="font-medium">
                                Kelas Ibu Hamil
                            </h3>
                            <p class="text-sm text-gray-600">
                                08:00 - 10:00 • Aula Posyandu
                            </p>
                        </div>
                        <div class="flex space-x-2">
                            <button class="text-posyanduu hover:text-posyanduDark">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="text-danger hover:text-red-600">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                    {{-- <div class="mt-4 p-6 border-2 border-dashed border-gray-300 rounded-lg text-center text-gray-500">
                        Belum ada jadwal posyandu yang ditambahkan.
                    </div> --}}
                </div>
            </div>
        </div>

    </main>
</x-app-main>
