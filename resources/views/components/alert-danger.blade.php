@if ($message)
<div x-data="{ open: true }" x-init="setTimeout(() => open = false, 5000)" x-show="open" x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100"
    x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 transform scale-100"
    x-transition:leave-end="opacity-0 transform scale-95"
    class="flex justify-between pr-3 fixed top-4 right-4 z-50 w-full max-w-sm overflow-hidden bg-white rounded-lg shadow-md transition duration-300 transform dark:bg-gray-800">
    <div class="flex ">
        <div class="flex items-center justify-center w-12 bg-red-500">
            <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M20 3.36667C10.8167 3.36667 3.3667 10.8167 3.3667 20C3.3667 29.1833 10.8167 36.6333 20 36.6333C29.1834 36.6333 36.6334 29.1833 36.6334 20C36.6334 10.8167 29.1834 3.36667 20 3.36667ZM19.1334 33.3333V22.9H13.3334L21.6667 6.66667V17.1H27.25L19.1334 33.3333Z" />
            </svg>
        </div>

        <div class="px-4 py-2 -mx-3">
            <div class="mx-3">
                <span class="font-semibold text-red-500 dark:text-red-400">Error</span>
                <p class="text-sm text-gray-600 dark:text-gray-200">
                    {{ $message }}
                </p>
            </div>
        </div>
    </div>
    <div class=" flex items-center justify-center">
        <button type="button" class="ltr:ml-auto rtl:mr-auto hover:opacity-80 text-red-500" @click="open = false">
            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5">
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
        </button>
    </div>
</div>
@endif
