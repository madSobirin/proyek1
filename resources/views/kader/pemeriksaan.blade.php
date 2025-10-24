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
        })" class="bg-white rounded-xl card-shadow mb-6">
            <!-- Tabs -->
            <div class="border-b border-gray-200 relative overflow-hidden">
                <nav class="flex -mb-px">
                    <!-- Tab Pemeriksaan -->
                    <button x-ref="pemeriksaanTab" @click="activeTab = 'pemeriksaan'; updateUnderline($el)"
                        :class="activeTab === 'pemeriksaan'
                            ?
                            'text-posyanduu' :
                            'text-gray-500 hover:text-gray-700'"
                        class="relative py-4 px-6 text-center font-medium text-sm whitespace-nowrap transition-all">
                        Pemeriksaan
                    </button>

                    <!-- Tab Jadwal -->
                    <button x-ref="jadwalTab" @click="activeTab = 'jadwal'; updateUnderline($el)"
                        :class="activeTab === 'jadwal'
                            ?
                            'text-posyanduu' :
                            'text-gray-500 hover:text-gray-700'"
                        class="relative py-4 px-6 text-center font-medium text-sm whitespace-nowrap transition-all">
                        Jadwal Posyandu
                    </button>

                    <!-- Garis bawah dinamis -->
                    <div class="absolute bottom-0 h-0.5 bg-posyanduu transition-all duration-300"
                        :style="`left: ${underlineLeft}px; width: ${underlineWidth}px;`">
                    </div>
                </nav>
            </div>

            <!-- Konten -->
            <div class="p-6">
                <!-- Pemeriksaan -->
                <div x-show="activeTab === 'pemeriksaan'" x-transition>
                    <div class="overflow-x-auto">
                        <table class="min-w-full text-sm text-left text-gray-700 border border-gray-200 rounded-lg">
                            <thead class="bg-gray-100 text-gray-600 uppercase text-xs font-medium">
                                <tr>
                                    <th class="px-4 py-3">Nama Peserta</th>
                                    <th class="px-4 py-3">Tanggal</th>
                                    <th class="px-4 py-3">Berat Badan</th>
                                    <th class="px-4 py-3">Tinggi Badan</th>
                                    <th class="px-4 py-3 text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-t">
                                    <td class="px-4 py-3">Budi Pratama</td>
                                    <td class="px-4 py-3">24 Oktober 2025</td>
                                    <td class="px-4 py-3">10 kg</td>
                                    <td class="px-4 py-3">80 cm</td>
                                    <td class="px-4 py-3 text-center">
                                        <button class="text-blue-600 hover:underline">Detail</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Jadwal -->
                <div x-show="activeTab === 'jadwal'" x-transition>
                    <div class="mt-4 p-6 border-2 border-dashed border-gray-300 rounded-lg text-center text-gray-500">
                        Belum ada jadwal posyandu yang ditambahkan.
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-main>
