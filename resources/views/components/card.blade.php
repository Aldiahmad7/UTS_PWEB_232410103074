<!-- resources/views/components/card.blade.php -->
<div class="max-w-md w-full bg-gray-800 p-8 rounded-xl shadow-xl">
    <h2 class="text-2xl font-bold text-center mb-8 text-white">Rhapsody.</h2>
    <form method="GET" action="{{ route('dashboard') }}">
        <div class="mb-6">
            <label for="username" class="block text-sm font-medium text-gray-300 mb-2">Username</label>
            <input type="text" id="username" name="username" required
                class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 text-gray-100">
        </div>
        <div class="mb-6">
            <label for="password" class="block text-sm font-medium text-gray-300 mb-2">Password</label>
            <input type="password" id="password" name="password" required
                class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 text-gray-100">
        </div>
        <button type="submit"
            class="w-full bg-indigo-600 text-white py-3 rounded-lg hover:bg-indigo-700 transition-colors duration-200 font-medium text-sm">
            Login
        </button>
    </form>
</div>
