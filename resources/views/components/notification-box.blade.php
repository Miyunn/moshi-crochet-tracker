@props(['title', 'description'])

{{-- The face in animation need to be added to this --}}
<div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3501)"
    class="flex absolute right-5 bottom-5 transform transition-all"
    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200"
    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-on:click="show = false">
    <div class='flex flex-col gap-3'>
        <div class="bg-white dark:bg-gray-950 relative border border-gray-100 dark:border-black rounded-lg shadow-lg">
            <div class="flex items-center p-4">
                <div class="mr-5 overflow-hidden">
                    <button onClick='return this.parentNode.remove()' class="absolute p-1 top-1 right-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" viewBox="0 0 20 20" fill="#6b7280">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <p class="font-medium text-gray-900 dark:text-gray-100">{{ $title }}</p>
                    <p class="max-w-xs text-sm text-gray-500 dark:text-gray-400">
                        {{ $description }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
