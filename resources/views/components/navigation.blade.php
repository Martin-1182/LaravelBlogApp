    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-jet-application-mark class="block h-9 w-auto" />
                    </a>
                </div>
            </div>
            <!-- Navigation Links -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <a href="{{ route('login') }}" class="text-sm text-gray-700">Login</a>
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700">Register</a>
            </div>
        </div>
    </div>

