<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-full">
    <div class="min-h-full">
        <nav class="bg-gray-800">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <img class="h-8 w-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500"
                                alt="Your Company">
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">

                                <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                                <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
                                <x-nav-link href=" /jobs" :active="request()->is('jobs')">jobs List</x-nav-link>

                            </div>
                        </div>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-4 flex items-center md:ml-6">
                            <button type="button"
                                class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                                <span class="absolute -inset-1.5"></span>
                                <span class="sr-only">View notifications</span>
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                                </svg>
                            </button>

                            <!-- Profile dropdown -->
                            <div class="relative ml-3">
                                <div>
                                    <button type="button"
                                        class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                                        id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                        <span class="absolute -inset-1.5"></span>
                                        <span class="sr-only">Open user menu</span>
                                        <img class="h-8 w-8 rounded-full"
                                            src="data:image/jpeg;base64,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"
                                            alt="">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="-mr-2 flex md:hidden">
                        <!-- Mobile menu button -->
                        <button type="button"
                            class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                            aria-controls="mobile-menu" aria-expanded="false">
                            <span class="absolute -inset-0.5"></span>
                            <span class="sr-only">Open main menu</span>
                            <!-- Menu open: "hidden", Menu closed: "block" -->
                            <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                            <!-- Menu open: "block", Menu closed: "hidden" -->
                            <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="md:hidden" id="mobile-menu">
                <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <a href="/" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white"
                        aria-current="page">Home</a>
                    <a href="/contact"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Contact</a>
                    <a href="/about"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">About</a>

                </div>
                <div class="border-t border-gray-700 pb-3 pt-4">
                    <div class="flex items-center px-5">
                        <div class="flex-shrink-0">
                            <img class="h-10 w-10 rounded-full"
                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="">
                        </div>
                        <div class="ml-3">
                            <div class="text-base font-medium leading-none text-white">Tom Cook</div>
                            <div class="text-sm font-medium leading-none text-gray-400">tom@example.com</div>
                        </div>
                        <button type="button"
                            class="relative ml-auto flex-shrink-0 rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                            <span class="absolute -inset-1.5"></span>
                            <span class="sr-only">View notifications</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                            </svg>
                        </button>
                    </div>
                    <div class="mt-3 space-y-1 px-2">
                        <a href="#"
                            class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Your
                            Profile</a>
                        <a href="#"
                            class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Settings</a>
                        <a href="#"
                            class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Sign
                            out</a>
                    </div>
                </div>
            </div>
        </nav>

        <header class="bg-white shadow">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{$heading}}</h1>
            </div>
        </header>
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                {{$slot}}
            </div>
        </main>
    </div>
</body>

</html>