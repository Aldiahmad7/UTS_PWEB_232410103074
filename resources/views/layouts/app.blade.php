<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS PWEB</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    @vite(['resources/css/app.css'])
</head>
<body class="bg-gray-100 text-gray-900 flex flex-col min-h-screen">
    {{-- Navbar --}}
    <div class="fixed top-0 left-0 right-0 z-50">
        @include('components.navbar')
    </div>

    {{-- Content --}}
    <main class="container mx-auto px-4 py-6 flex-grow mt-16">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('components.footer')
</body>
</html>
