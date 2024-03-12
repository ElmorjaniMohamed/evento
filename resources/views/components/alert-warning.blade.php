@if ($message)
        <div x-data="{ open: true }" x-init="setTimeout(() => open = false, 5000)" x-show="open"
            x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-95"
            x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 transform scale-100"
            x-transition:leave-end="opacity-0 transform scale-95"
            class="flex justify-between pr-3 fixed z-50 top-4 right-4 w-full max-w-sm overflow-hidden bg-white rounded-lg shadow-md transition duration-300 transform dark:bg-gray-800">
            <div class="flex ">
                <div class="flex items-center justify-center w-12 bg-amber-500">
                    <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM21.6667 28.3333H18.3334V25H21.6667V28.3333ZM21.6667 21.6666H18.3334V11.6666H21.6667V21.6666Z" />
                    </svg>
                </div>

                <div class="px-4 py-2 -mx-3">
                    <div class="mx-3">
                        <span class="font-semibold text-amber-500 dark:text-amber-400">Warning</span>
                        <p class="text-sm text-gray-600 dark:text-gray-200">
                            {{ $message }}
                        </p>
                    </div>
                </div>
            </div>
            <div class=" flex items-center justify-center">
                <button type="button" class="ltr:ml-auto rtl:mr-auto hover:opacity-80 text-yellow-400"
                    @click="open = false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" class="w-5 h-5">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
            </div>
        </div>
    @endif
