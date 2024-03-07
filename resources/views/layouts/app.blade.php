<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @vite(['node_modules/flowbite/dist/flowbite.min.js'])

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.10.6/sweetalert2.all.js" integrity="sha512-s6cmjAyURwCTwLDdp0oIw8QcQ7zdYioOWOoYACB7+Xmzrnc9VH1A8aUei32LafOWRiPiYJKSWSNoNg2WG5SBRA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-[url('/public/assets/images/background/bg-element-3.jpg')] ">

        <nav class="fixed top-0 z-50 w-full bg-[url('/public/assets/images/background/bg-element-3.jpg')] border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
            <div class="px-3 py-3 lg:px-5 lg:pl-3">
                <div class="flex items-center justify-between">
                    <div class="flex items-center justify-start rtl:justify-end">
                        <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar"
                            aria-controls="logo-sidebar" type="button"
                            class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                            <span class="sr-only">Open sidebar</span>
                            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                    d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                                </path>
                            </svg>
                        </button>
                        <a href="" class="flex ms-2 md:me-24">
                            <img src="/assets/images/logo.png" class="h-8" alt="Logo">
                        </a>
                    </div>
                    <div class="flex items-center">
                        <div class="ml-2">
                            <button id="theme-mode"
                                class=" mr-2 text-black dark:text-white bg-white shadow-lg rounded-full p-2 dark:bg-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6 block dark:hidden">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6 hidden dark:block">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
                                </svg>
                            </button>
                        </div>
                        <div class="flex items-center ms-3">
                            <div>
                                <button type="button"
                                    class="flex text-sm bg-none dark:bg-slate-800 rounded-full border-[3px] border-orange-500 p-0.5 "
                                    aria-expanded="false" data-dropdown-toggle="dropdown-user">
                                    <span class="sr-only">Open user menu</span>
                                    <img class="w-8 h-8 rounded-full" src="{{ asset('storage/avatars/' . Auth::user()->image) }}" alt="User Photo">
                                </button>
                            </div>
                            <div class="z-50 hidden my-4 text-base list-none bg-orange-500 divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
                                id="dropdown-user">
                                <div class="px-4 py-3" role="none">
                                    <p class="text-sm text-slate-100 dark:text-white" role="none">
                                        {{ Auth::user()->name }}
                                    </p>
                                    <p class="text-sm font-medium text-slate-100 truncate dark:text-gray-300"
                                        role="none">
                                        {{ Auth::user()->email }}
                                    </p>
                                </div>
                                <ul class="py-1" role="none">
                                    <li>
                                        <a href="{{route('home')}}"
                                            class="block px-4 py-2 text-sm text-slate-50 hover:bg-gray-100 hover:text-orange-500 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                            role="menuitem">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{route('profile.edit')}}"
                                            class="block px-4 py-2 text-sm text-slate-50 hover:bg-gray-100 hover:text-orange-500 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                            role="menuitem">Profile</a>
                                    </li>
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <a href="route('logout')" onclick="event.preventDefault();
                                            this.closest('form').submit();"
                                            class="block px-4 py-2 text-sm text-slate-50 hover:bg-gray-100 hover:text-orange-500 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                            role="menuitem">Sign out</a>
                                        </form>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <aside id="logo-sidebar"
            class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-none border-r border-gray-200 sm:translate-x-0 dark:border-gray-700"
            aria-label="Sidebar">
            <div class="h-full px-3 pb-4 overflow-y-auto bg-none">
                <ul class="space-y-2 font-medium">
                    <li>
                        <a href="{{route('dashboard')}}"
                            class="flex items-center p-2 text-slate-50 rounded-lg dark:text-slate-50 hover:text-orange-500 hover:bg-slate-100 dark:hover:bg-gray-700 group {{ request()->routeIs('dashboard') ? 'bg-orange-500 text-slate-50' : '' }}">
                            <svg class="w-5 h-5 text-slate-50 transition duration-75 dark:text-gray-400 group-hover:text-orange-500 dark:group-hover:text-orange-500"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 22 21">
                                <path
                                    d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                                <path
                                    d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                            </svg>
                            <span class="ms-3">Dashboard</span>
                        </a>
                    </li>
                    @if (auth()->user()->hasRole('Administrator'))
                    <li>
                        <a href="{{ route('categories.index') }}"
                            class="flex items-center p-2 text-slate-50 rounded-lg dark:text-slate-50 hover:text-orange-500 hover:bg-slate-100 dark:hover:bg-gray-700 group {{ request()->routeIs('categories.index', 'categories.create', 'categories.edit') ? 'bg-orange-500 text-slate-50' : '' }}">
                            <svg class="flex-shrink-0 w-5 h-5 text-slate-50 transition duration-75 dark:text-slate-50 group-hover:text-orange-500 dark:group-hover:text-white"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 18 18">
                                <path
                                    d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                            </svg>
                            <span class="flex-1 ms-3 whitespace-nowrap">Categories</span>
                        </a>
                    </li>
                    @endif
                    @if (auth()->user()->hasRole('Organizer'))
                    <li>
                        <a href="{{route('events.index')}}"
                            class="flex items-center p-2 text-slate-50 rounded-lg dark:text-slate-50 hover:text-orange-500 hover:bg-slate-100 dark:hover:bg-gray-700 group {{ request()->routeIs('events.index', 'events.create', 'events.edit') ? 'bg-orange-500 text-slate-50' : '' }}">
                            <svg class="flex-shrink-0 w-5 h-5 text-slate-50 transition duration-75 dark:text-slate-50 group-hover:text-orange-500 dark:group-hover:text-white"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path
                                    d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z" />
                            </svg>
                            <span class="flex-1 ms-3 whitespace-nowrap">Events</span>
                            <span
                                class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
                        </a>
                    </li>
                    @endif
                    @if (auth()->user()->hasRole('Administrator'))
                    <li>
                        <a href="{{route('events.manage')}}"
                            class="flex items-center p-2 text-slate-50 rounded-lg dark:text-slate-50 hover:text-orange-500 hover:bg-slate-100 dark:hover:bg-gray-700 group {{ request()->routeIs('events.manage') ? 'bg-orange-500 text-slate-50' : '' }}">
                            <svg class="flex-shrink-0 w-5 h-5 text-slate-50 transition duration-75 dark:text-slate-50 group-hover:text-orange-500 dark:group-hover:text-white"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path
                                    d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z" />
                            </svg>
                            <span class="flex-1 ms-3 whitespace-nowrap">Manage Events</span>
                            <span
                                class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
                        </a>
                    </li>
                    @endif

                    <li>
                        <a href="#"
                            class="flex items-center p-2 text-slate-50 rounded-lg dark:text-slate-50 hover:text-orange-500 hover:bg-slate-100 dark:hover:bg-gray-700 group ">
                            <svg class="flex-shrink-0 w-5 h-5 text-slate-50 transition duration-75 dark:text-slate-50 group-hover:text-orange-500 dark:group-hover:text-white"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 20 18">
                                <path
                                    d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                            </svg>
                            <span class="flex-1 ms-3 whitespace-nowrap">Users</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>

        <div class="p-4 sm:ml-64">
            <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
                @yield('content')
            </div>
        </div>

    </div>

</body>
<script>
    // Light/Dark Mode Toggle Button
    var themeColorToggle = document.getElementById('theme-mode');
    if (themeColorToggle) {
        themeColorToggle.addEventListener('click', function(e) {
            var html = document.documentElement;
            var currentTheme = html.classList.contains('light') ? 'light' : 'dark';
            var newTheme = currentTheme === 'light' ? 'dark' : 'light';
            html.classList.remove(currentTheme);
            html.classList.add(newTheme);
        });
    }
</script>


</html>
