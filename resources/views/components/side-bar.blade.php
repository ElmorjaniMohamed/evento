<aside id="logo-sidebar"
    class="fixed top-[4.07rem] left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-slate-50 dark:bg-gray-800">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="{{ route('dashboard') }}"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:text-slate-50 hover:bg-blue-600 dark:hover:bg-gray-600 group {{ request()->routeIs('dashboard') ? 'bg-blue-500 text-slate-50' : '' }}">
                    <svg class="w-5 h-5 text-blue-500 transition duration-75 dark:text-blue-500 group-hover:text-slate-50 dark:group-hover:text-white {{ request()->routeIs('dashboard') ? 'text-slate-50 dark:text-slate-50' : '' }}"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                        <path
                            d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                        <path
                            d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                    </svg>
                    <span class="ms-3">Statistic</span>
                </a>
            </li>
            <li>
                <a href=""
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:text-slate-50 hover:bg-blue-600 dark:hover:bg-gray-600 group {{ request()->routeIs('companies.index') ? 'bg-blue-500 text-slate-50' : '' }} ">
                    <svg class="flex-shrink-0 w-5 h-5 text-blue-500 transition duration-75 dark:text-blue-500 group-hover:text-slate-50 dark:group-hover:text-white {{ request()->routeIs('companies.index') ? 'text-slate-50 dark:text-slate-50' : '' }}"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                        <path
                            d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Companies</span>
                </a>
            </li>
            <li>
                <a href=""
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:text-slate-50 hover:bg-blue-600 dark:hover:bg-gray-600 group {{ request()->routeIs('adverts.index') ? 'bg-blue-500 text-slate-50' : '' }}">
                    <svg class="flex-shrink-0 w-6 h-6 text-blue-500 transition duration-75 dark:text-blue-500 group-hover:text-slate-50 dark:group-hover:text-white {{ request()->routeIs('adverts.index') ? 'text-slate-50 dark:text-slate-50' : '' }}"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M18.5 3.1c.3.2.5.5.5.9v16a1 1 0 0 1-1.6.8L12 17V7.1l5.4-4a1 1 0 0 1 1 0ZM22 12a4 4 0 0 1-2 3.5v-7c1.2.7 2 2 2 3.5ZM10 8H4a1 1 0 0 0-1 1v6c0 .6.4 1 1 1h6V8Zm0 9H5v3c0 .6.4 1 1 1h3c.6 0 1-.4 1-1v-3Z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Anouncement</span>
                </a>
            </li>
            <li>
                <a href=""
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:text-slate-50 hover:bg-blue-600 dark:hover:bg-gray-600 group {{ request()->routeIs('skills.index') ? 'bg-blue-500 text-slate-50' : '' }}">
                    <svg class="flex-shrink-0 w-6 h-6 text-blue-500 transition duration-75 dark:text-blue-500 group-hover:text-slate-50 dark:group-hover:text-white {{ request()->routeIs('skills.index') ? 'text-slate-50 dark:text-slate-50' : '' }}" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M18 3h-5.7a2 2 0 0 0-1.4.6L3.6 11a2 2 0 0 0 0 2.8l6.6 6.6a2 2 0 0 0 2.8 0l7.4-7.5a2 2 0 0 0 .6-1.4V6a3 3 0 0 0-3-3Zm-2.4 6.4a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">skills</span>
                </a>
            </li>
            <li>
                <a href=""
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:text-slate-50 hover:bg-blue-600 dark:hover:bg-gray-600 group {{ request()->routeIs('users.index') ? 'bg-blue-500 text-slate-50' : '' }}">
                    <svg class="flex-shrink-0 w-6 h-6 text-blue-500 transition duration-75 dark:text-blue-500 group-hover:text-slate-50 dark:group-hover:text-white {{ request()->routeIs('users.index') ? 'text-slate-50 dark:text-slate-50' : '' }}"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M12 6a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7Zm-1.5 8a4 4 0 0 0-4 4c0 1.1.9 2 2 2h7a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-3Zm6.8-3.1a5.5 5.5 0 0 0-2.8-6.3c.6-.4 1.3-.6 2-.6a3.5 3.5 0 0 1 .8 6.9Zm2.2 7.1h.5a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-1.1l-.5.8c1.9 1 3.1 3 3.1 5.2ZM4 7.5a3.5 3.5 0 0 1 5.5-2.9A5.5 5.5 0 0 0 6.7 11 3.5 3.5 0 0 1 4 7.5ZM7.1 12H6a4 4 0 0 0-4 4c0 1.1.9 2 2 2h.5a6 6 0 0 1 3-5.2l-.4-.8Z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Users</span>
                </a>
            </li>
            <li>
                <a href=""
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:text-slate-50 hover:bg-blue-600 dark:hover:bg-gray-600 group {{ request()->routeIs('roles.index') ? 'bg-blue-500 text-slate-50' : '' }}">
                    <svg class="flex-shrink-0 w-5 h-5 text-blue-500 transition duration-75 dark:text-blue-500 group-hover:text-slate-50 dark:group-hover:text-white {{ request()->routeIs('roles.index') ? 'text-slate-50 dark:text-slate-50' : '' }}"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                        <path
                            d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Roles</span>
                </a>
            </li>

        </ul>
    </div>
</aside>
