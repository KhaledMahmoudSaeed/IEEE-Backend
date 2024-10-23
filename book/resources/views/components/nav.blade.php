<nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex flex-shrink-0 items-start">
                    <a href="{{ route('home') }}">

                        <img src="{{ vite::image('logo.icon') }}" width="60" alt="">
                    </a>
                </div>
                <div class="hidden sm:ml-6 sm:block">
                    <div class="flex space-x-4">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <x-link href="{{ route('home') }}" :active="request()->is('/')">Home</x-link>
                        <x-link href="{{ route('authors') }}" :active="request()->is('authors')">Authors</x-link>
                        <x-link href="{{ route('categories') }}" :active="request()->is('categories')">Categories</x-link>
                        <x-link href="{{ route('about') }}" :active="request()->is('about')">About Us</x-link>
                        @can('admin')
                            <x-link href="{{ route('dashboard.index') }}" :active="request()->is('dashboard.index')"> Dashboard</x-link>
                        @endcan
                    </div>
                </div>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">

                <div class="flex space-x-4">
                    @guest
                        <x-link href="/login" type="registration">Login</x-link>
                        <x-link href="/register" type="registration">Sign UP</x-link>
                    @endguest
                    @auth
                        <a class="px-3 py-2 text-sm font-medium text-primary"
                            href="{{ route('profile.show', Auth::user()->id) }}">

                            {{ __(Auth::user()->name) }}
                        </a>

                        <a class="px-3 py-2 text-sm font-medium text-primary" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                    </form> @endauth
                </div>
            </div>
        </div>
    </div>
</nav>
