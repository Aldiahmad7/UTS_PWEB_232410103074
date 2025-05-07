@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white rounded-md border border-gray-200 shadow-md max-w-lg mx-auto">
            <div class="bg-indigo-600 text-white p-5 rounded-t-md text-center">
                <h2 class="text-2xl font-bold">Profil</h2>
            </div>

            <div class="p-6 sm:p-8">
                @if(isset($username))
                    <div class="flex flex-col items-center">
                        <div class="w-28 h-28 sm:w-32 sm:h-32 rounded-md bg-indigo-100 flex items-center justify-center mb-6 border border-indigo-50 shadow-md">
                            <span class="text-3xl sm:text-4xl font-medium text-indigo-700">
                                {{ strtoupper(substr($username, 0, 1)) }}
                            </span>
                        </div>

                        <div class="text-center w-full">
                            <h3 class="text-xl sm:text-2xl font-medium text-gray-900">{{ $username }}</h3>
                            <p class="text-md sm:text-lg text-gray-500 mt-2 mb-6">Anggota Perpustakaan</p>

                            <div class="mt-4 sm:mt-6">
                                <div class="bg-gray-50 rounded-md p-4 sm:p-6 text-sm sm:text-base border border-gray-100">
                                    <div class="mb-3">
                                        <span class="font-medium text-gray-700">Email:</span>
                                        <span class="text-gray-600 ml-2">{{ strtolower($username) }}@gmail.com</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
