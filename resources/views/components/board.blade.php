<div class="flex items-center space-x-4">
    @if(request()->has('username'))
        <span class="text-sm text-gray-900 mr-4">Halo, {{ request()->get('username') }}</span>
    @endif
</div>

<div class="container mx-auto">
    <h1 class="text-2xl font-bold text-center text-gray-800 mb-8">Dashboard Perpustakaan Mini</h1>

    <!-- Statistik -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="bg-white p-6 rounded-lg shadow-md text-center">
            <h2 class="text-lg font-semibold text-gray-700">Total Buku</h2>
            <p class="text-3xl font-bold text-indigo-600 mt-2">50</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md text-center">
            <h2 class="text-lg font-semibold text-gray-700">Buku Tersedia</h2>
            <p class="text-3xl font-bold text-green-600 mt-2">30</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md text-center">
            <h2 class="text-lg font-semibold text-gray-700">Buku Dipinjam</h2>
            <p class="text-3xl font-bold text-red-600 mt-2">20</p>
        </div>
    </div>

    <!-- Peminjaman Terbaru -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-8">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Peminjaman Terbaru</h2>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white">
                <thead>
                    <tr class="bg-gray-100 text-gray-600 uppercase text-sm">
                        <th class="py-3 px-4 text-left">Judul Buku</th>
                        <th class="py-3 px-4 text-left">Peminjam</th>
                        <th class="py-3 px-4 text-left">Tanggal Pinjam</th>
                        <th class="py-3 px-4 text-left">Jatuh Tempo</th>
                        <th class="py-3 px-4 text-left">Status</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600">
                    <tr class="border-b border-gray-200">
                        <td class="py-3 px-4">Laskar Pelangi</td>
                        <td class="py-3 px-4">Budi Santoso</td>
                        <td class="py-3 px-4">01/05/2025</td>
                        <td class="py-3 px-4">15/05/2025</td>
                        <td class="py-3 px-4"><span class="bg-yellow-100 text-yellow-600 py-1 px-3 rounded-full text-xs">Dipinjam</span></td>
                    </tr>
                    <tr class="border-b border-gray-200">
                        <td class="py-3 px-4">Bumi Manusia</td>
                        <td class="py-3 px-4">Siti Aisyah</td>
                        <td class="py-3 px-4">29/04/2025</td>
                        <td class="py-3 px-4">13/05/2025</td>
                        <td class="py-3 px-4"><span class="bg-yellow-100 text-yellow-600 py-1 px-3 rounded-full text-xs">Dipinjam</span></td>
                    </tr>
                    <tr class="border-b border-gray-200">
                        <td class="py-3 px-4">Filosofi Teras</td>
                        <td class="py-3 px-4">Ahmad Ridwan</td>
                        <td class="py-3 px-4">25/04/2025</td>
                        <td class="py-3 px-4">09/05/2025</td>
                        <td class="py-3 px-4"><span class="bg-red-100 text-red-600 py-1 px-3 rounded-full text-xs">Terlambat</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Buku Terpopuler dan Kategori -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
        <!-- Buku Terpopuler -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Buku Terpopuler</h2>
            <ul>
                <li class="flex justify-between items-center border-b border-gray-200 py-3">
                    <span>Laskar Pelangi</span>
                    <span class="bg-indigo-100 text-indigo-600 py-1 px-3 rounded-full text-xs">15 peminjaman</span>
                </li>
                <li class="flex justify-between items-center border-b border-gray-200 py-3">
                    <span>Bumi Manusia</span>
                    <span class="bg-indigo-100 text-indigo-600 py-1 px-3 rounded-full text-xs">12 peminjaman</span>
                </li>
                <li class="flex justify-between items-center border-b border-gray-200 py-3">
                    <span>Pulang</span>
                    <span class="bg-indigo-100 text-indigo-600 py-1 px-3 rounded-full text-xs">10 peminjaman</span>
                </li>
                <li class="flex justify-between items-center py-3">
                    <span>Filosofi Teras</span>
                    <span class="bg-indigo-100 text-indigo-600 py-1 px-3 rounded-full text-xs">8 peminjaman</span>
                </li>
            </ul>
        </div>

        <!-- Kategori Buku -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Kategori Buku</h2>
            <div class="space-y-3">
                <div class="flex justify-between items-center pb-2">
                    <span>Novel</span>
                    <span class="text-sm font-medium">20 buku</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2">
                    <div class="bg-blue-600 h-2 rounded-full" style="width: 40%"></div>
                </div>

                <div class="flex justify-between items-center pb-2">
                    <span>Pendidikan</span>
                    <span class="text-sm font-medium">15 buku</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2">
                    <div class="bg-green-600 h-2 rounded-full" style="width: 30%"></div>
                </div>

                <div class="flex justify-between items-center pb-2">
                    <span>Sejarah</span>
                    <span class="text-sm font-medium">10 buku</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2">
                    <div class="bg-yellow-600 h-2 rounded-full" style="width: 20%"></div>
                </div>

                <div class="flex justify-between items-center pb-2">
                    <span>Sains</span>
                    <span class="text-sm font-medium">5 buku</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2">
                    <div class="bg-red-600 h-2 rounded-full" style="width: 10%"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tombol Aksi -->
    <div class="flex flex-wrap gap-4 justify-center">
        <button class="bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2 px-6 rounded-lg flex items-center">
            <i class="fas fa-plus mr-2"></i>
            Tambah Buku
        </button>
        <button class="bg-green-600 hover:bg-green-700 text-white font-medium py-2 px-6 rounded-lg flex items-center">
            <i class="fas fa-exchange-alt mr-2"></i>
            Peminjaman
        </button>
        <button class="bg-yellow-600 hover:bg-yellow-700 text-white font-medium py-2 px-6 rounded-lg flex items-center">
            <i class="fas fa-user-plus mr-2"></i>
            Tambah Anggota
        </button>
        <button class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-6 rounded-lg flex items-center">
            <i class="fas fa-file-alt mr-2"></i>
            Laporan
        </button>
    </div>
</div>
