<nav class="bg-white shadow-md">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <div class="flex items-center space-x-4">
                <p class="bg-gradient-to-r from-blue-500 to-indigo-600 bg-clip-text text-transparent font-bold text-xl">Rhaperpust.</p>
            </div>

            <div class="hidden md:block">
                <div class="flex items-center space-x-6">
                    <a href="{{ url('/dashboard') . '?username=' . request('username') }}"
                       class="px-3 py-2 rounded-lg text-sm font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition duration-200
                             {{ request()->is('dashboard*') || (!request()->is('pengelolaan*') && !request()->is('profile*')) ? 'bg-blue-100 text-blue-600 font-semibold' : '' }}">
                       Dashboard
                    </a>
                    <a href="{{ url('/pengelolaan') . '?username=' . request('username') }}"
                       class="px-3 py-2 rounded-lg text-sm font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition duration-200
                             {{ request()->is('pengelolaan*') ? 'bg-blue-100 text-blue-600 font-semibold' : '' }}">
                       Pengelolaan
                    </a>
                    <a href="{{ url('/profile') . '?username=' . request('username') }}"
                       class="px-3 py-2 rounded-lg text-sm font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition duration-200
                             {{ request()->is('profile*') ? 'bg-blue-100 text-blue-600 font-semibold' : '' }}">
                       Profile
                    </a>
                </div>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button class="text-gray-600 hover:text-blue-600 focus:outline-none">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>
