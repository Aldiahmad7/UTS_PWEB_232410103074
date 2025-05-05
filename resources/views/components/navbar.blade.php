<nav class="bg-gray-900 text-gray-100 shadow-lg">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <div class="flex items-center space-x-4">
                <p class="text-blue-400 font-bold text-xl">Rhapsody.</p>
            </div>

            <div class="hidden md:block">
                <div class="flex items-center space-x-6">
                    <a href="{{ url('/dashboard') . '?username=' . request('username') }}" class="px-2 py-1 rounded-md text-sm font-medium hover:bg-gray-800 hover:text-blue-400 transition duration-200">Dashboard</a>
                    <a href="{{ url('/pengelolaan') . '?username=' . request('username') }}" class="px-2 py-1 rounded-md text-sm font-medium hover:bg-gray-800 hover:text-blue-400 transition duration-200">Pengelolaan</a>
                    <a href="{{ url('/profile') . '?username=' . request('username') }}" class="px-2 py-1 rounded-md text-sm font-medium hover:bg-gray-800 hover:text-blue-400 transition duration-200">Profile</a>
                </div>
            </div>
        </div>
    </div>
</nav>
