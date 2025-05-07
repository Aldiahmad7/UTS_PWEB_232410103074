@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-6">
        <div class="flex items-center justify-between mb-6 pb-2 border-b border-gray-200">
            <h2 class="text-xl font-bold text-gray-800">Pengelolaan Peminjaman Buku</h2>
        </div>

        <!-- Tabel untuk Desktop dan Tablet -->
        <div class="bg-white rounded-lg shadow-sm border border-gray-100 hidden md:block">
            <div class="overflow-x-auto">
                <table class="min-w-full">
                    <thead>
                        <tr class="bg-gray-50">
                            <th class="py-3 px-4 text-left text-xs font-medium text-gray-600 uppercase tracking-wider border-b">Judul Buku</th>
                            <th class="py-3 px-4 text-left text-xs font-medium text-gray-600 uppercase tracking-wider border-b">Peminjam</th>
                            <th class="py-3 px-4 text-left text-xs font-medium text-gray-600 uppercase tracking-wider border-b">Tanggal Pinjam</th>
                            <th class="py-3 px-4 text-left text-xs font-medium text-gray-600 uppercase tracking-wider border-b">Tanggal Kembali</th>
                            <th class="py-3 px-4 text-left text-xs font-medium text-gray-600 uppercase tracking-wider border-b">Status</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @foreach ($peminjaman as $item)
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="py-3 px-4 text-sm">
                                    <div class="font-medium text-gray-900">{{ $item['judul'] }}</div>
                                </td>
                                <td class="py-3 px-4 text-sm text-gray-700">{{ $item['peminjam'] }}</td>
                                <td class="py-3 px-4 text-sm text-gray-700">{{ $item['tanggal_pinjam'] }}</td>
                                <td class="py-3 px-4 text-sm text-gray-700">{{ $item['tanggal_kembali'] }}</td>
                                <td class="py-3 px-4">
                                    @if($item['status'] === 'Terlambat')
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                            Terlambat
                                        </span>
                                    @elseif($item['status'] === 'Dikembalikan')
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                            Dikembalikan
                                        </span>
                                    @else
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-amber-100 text-amber-800">
                                            Dipinjam
                                        </span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Tampilan Card untuk Mobile -->
        <div class="md:hidden space-y-4">
            @foreach ($peminjaman as $item)
                <div class="bg-white rounded-lg shadow-sm border border-gray-100 p-4">
                    <div class="mb-3">
                        <h3 class="font-medium text-gray-900">{{ $item['judul'] }}</h3>
                    </div>

                    <div class="space-y-2 text-sm">
                        <div class="flex justify-between">
                            <span class="text-gray-500">Peminjam:</span>
                            <span class="text-gray-700 font-medium">{{ $item['peminjam'] }}</span>
                        </div>

                        <div class="flex justify-between">
                            <span class="text-gray-500">Tanggal Pinjam:</span>
                            <span class="text-gray-700">{{ $item['tanggal_pinjam'] }}</span>
                        </div>

                        <div class="flex justify-between">
                            <span class="text-gray-500">Tanggal Kembali:</span>
                            <span class="text-gray-700">{{ $item['tanggal_kembali'] }}</span>
                        </div>

                        <div class="flex justify-between items-center pt-1">
                            <span class="text-gray-500">Status:</span>
                            @if($item['status'] === 'Terlambat')
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                    Terlambat
                                </span>
                            @elseif($item['status'] === 'Dikembalikan')
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                    Dikembalikan
                                </span>
                            @else
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-amber-100 text-amber-800">
                                    Dipinjam
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
