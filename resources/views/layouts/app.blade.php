<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rhaperpust.</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        * {
            scrollbar-width: none;
        }
        *::-webkit-scrollbar {
            display: none;
        }
        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
            overflow: hidden !important;
        }
        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-900 flex flex-col min-h-screen">
    {{-- Navbar --}}
    <div class="fixed top-0 left-0 right-0 z-50 w-full">
        @include('components.navbar')
    </div>

    {{-- Content --}}
    <main class="container mx-auto px-4 py-6 flex-grow mt-16 md:mt-20">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('components.footer')
</body>
</html>
