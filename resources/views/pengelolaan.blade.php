@extends('layouts.app')

@section('content')
    <h2 class="text-xl font-semibold mb-4">Pengelolaan Peminjaman Buku</h2>
    <table class="min-w-full bg-white">
        <thead>
            <tr class="bg-gray-100 text-gray-600">
                <th class="py-2 px-4 border-b">Judul Buku</th>
                <th class="py-2 px-4 border-b">Peminjam</th>
                <th class="py-2 px-4 border-b">Tanggal Pinjam</th>
                <th class="py-2 px-4 border-b">Tanggal Kembali</th>
                <th class="py-2 px-4 border-b">Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($peminjaman as $item)
                <tr>
                    <td class="py-2 px-4 border-b">{{ $item['judul'] }}</td>
                    <td class="py-2 px-4 border-b">{{ $item['peminjam'] }}</td>
                    <td class="py-2 px-4 border-b">{{ $item['tanggal_pinjam'] }}</td>
                    <td class="py-2 px-4 border-b">{{ $item['tanggal_kembali'] }}</td>
                    <td class="py-2 px-4 border-b">
                        @if($item['status'] === 'Terlambat')
                            <span class="bg-red-100 text-red-600 py-1 px-3 rounded-full text-xs">Terlambat</span>
                        @elseif($item['status'] === 'Dikembalikan')
                            <span class="bg-green-100 text-green-600 py-1 px-3 rounded-full text-xs">Dikembalikan</span>
                        @else
                            <span class="bg-yellow-100 text-yellow-600 py-1 px-3 rounded-full text-xs">Dipinjam</span>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
