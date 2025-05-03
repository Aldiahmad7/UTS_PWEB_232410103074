<!-- Modern Dark Navbar with Tailwind CSS -->
<nav class="bg-gray-900 text-gray-100 shadow-lg">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <!-- Logo and Brand -->
            <div class="flex items-center">
                <a href="#" class="flex items-center">
                    <span class="text-blue-400 font-bold text-xl">Rhapsody</span>
                    <span class="text-blue-500 text-2xl ml-1">.</span>
                </a>
            </div>

            <!-- Main Navigation - Hidden on mobile -->
            <div class="hidden md:block">
                <div class="flex items-center space-x-6">
                    <a href="{{ url('/dashboard') }}" class="px-2 py-1 rounded-md text-sm font-medium hover:bg-gray-800 hover:text-blue-400 transition duration-200">Dashboard</a>
                    <a href="{{ url('/pengelolaan') }}" class="px-2 py-1 rounded-md text-sm font-medium hover:bg-gray-800 hover:text-blue-400 transition duration-200">Pengelolaan</a>
                    <a href="{{ url('/profile') }}" class="px-2 py-1 rounded-md text-sm font-medium hover:bg-gray-800 hover:text-blue-400 transition duration-200">Profile</a>
                    <a href="{{ url('/logout') }}" class="px-3 py-1.5 bg-gray-800 rounded-md text-sm font-medium hover:bg-blue-600 transition duration-200">Logout</a>
                </div>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button type="button" class="text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu - Hidden by default -->
    <div class="hidden md:hidden">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="{{ url('/dashboard') }}" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-gray-800 hover:text-blue-400 transition duration-200">Dashboard</a>
            <a href="{{ url('/pengelolaan') }}" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-gray-800 hover:text-blue-400 transition duration-200">Pengelolaan</a>
            <a href="{{ url('/profile') }}" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-gray-800 hover:text-blue-400 transition duration-200">Profile</a>
            <a href="{{ url('/logout') }}" class="block px-3 py-2 bg-gray-800 rounded-md text-base font-medium hover:bg-blue-600 transition duration-200">Logout</a>
        </div>
    </div>
</nav>
