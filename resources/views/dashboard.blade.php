@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-6">
        <div class="flex justify-between items-center mb-6 pb-2 border-b border-gray-200">
            <h1 class="text-2xl font-bold text-gray-800">Dashboard Rhaperpust.</h1>
            @if($username)
                <div class="flex items-center">
                    <span class="py-1 px-3 bg-indigo-50 text-indigo-700 rounded-md">Welcome, {{ $username }}</span>
                </div>
            @endif
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-5 mb-10">
            <div class="bg-white p-5 rounded-lg shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                <h2 class="text-lg font-medium text-gray-700 mb-2">Total Buku</h2>
                <p class="text-3xl font-bold text-indigo-600">10</p>
            </div>

            <div class="bg-white p-5 rounded-lg shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                <h2 class="text-lg font-medium text-gray-700 mb-2">Buku Tersedia</h2>
                <p class="text-3xl font-bold text-green-600">3</p>
            </div>

            <div class="bg-white p-5 rounded-lg shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                <h2 class="text-lg font-medium text-gray-700 mb-2">Buku Dipinjam</h2>
                <p class="text-3xl font-bold text-red-600">7</p>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-sm border border-gray-100 p-5">
            <h2 class="text-xl font-medium text-gray-800 mb-4">Buku Tersedia</h2>
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="bg-gray-50 text-left text-gray-600 text-sm">
                            <th class="py-3 px-4 font-medium rounded-tl-md">Judul</th>
                            <th class="py-3 px-4 font-medium">Peminjam Terakhir</th>
                            <th class="py-3 px-4 font-medium rounded-tr-md">Tanggal Dikembalikan</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        <tr class="border-t border-gray-100 hover:bg-gray-50">
                            <td class="py-3 px-4">Bumi</td>
                            <td class="py-3 px-4">Sal Priadi</td>
                            <td class="py-3 px-4">2025-05-12</td>
                        </tr>
                        <tr class="border-t border-gray-100 hover:bg-gray-50">
                            <td class="py-3 px-4">Atomic Habits</td>
                            <td class="py-3 px-4">Erling Rifqi</td>
                            <td class="py-3 px-4">2025-05-02</td>
                        </tr>
                        <tr class="border-t border-gray-100 hover:bg-gray-50">
                            <td class="py-3 px-4">Dilan 1990</td>
                            <td class="py-3 px-4">Messi</td>
                            <td class="py-3 px-4">2025-04-24</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
