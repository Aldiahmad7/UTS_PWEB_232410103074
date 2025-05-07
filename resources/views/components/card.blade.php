<div class="w-full max-w-sm sm:max-w-md md:max-w-lg bg-white p-6 sm:p-8 rounded-xl shadow-md mx-4">
    <h2 class="text-2xl font-bold text-center mb-6 sm:mb-8 bg-gradient-to-r from-blue-500 to-indigo-600 bg-clip-text text-transparent">
        Login
    </h2>
    <form method="POST" action="{{ route('login.proses') }}">
        @csrf
        <div class="mb-5 sm:mb-6">
            <label for="username" class="block text-sm font-medium text-gray-600 mb-1 sm:mb-2">Username</label>
            <input type="text" id="username" name="username" required
                class="w-full px-4 py-2 sm:py-3 bg-white border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-gray-700 transition duration-200">
        </div>
        <div class="mb-5 sm:mb-6">
            <label for="password" class="block text-sm font-medium text-gray-600 mb-1 sm:mb-2">Password</label>
            <input type="password" id="password" name="password" required
                class="w-full px-4 py-2 sm:py-3 bg-white border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-gray-700 transition duration-200">
        </div>
        <button type="submit"
            class="w-full bg-gradient-to-r from-blue-500 to-indigo-600 text-white py-2.5 sm:py-3 rounded-lg hover:opacity-90 transition duration-200 font-medium text-sm shadow-md hover:shadow-lg">
            Login
        </button>
    </form>
</div>
