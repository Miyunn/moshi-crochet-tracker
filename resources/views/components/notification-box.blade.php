@props(['title', 'description', 'size'])

{{-- The face in animation need to be added to this --}}
<div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3501)"
    class="shadow-lg rounded-lg bg-white dark:bg-white mx-auto m-8 p-4 notification-box flex absolute right-5 bottom-2 overflow-hidden shadow-xl transform transition-all"
    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200"
    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
    <div class="pr-2">
        <svg class="fill-current text-blue-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
            height="24">
            <path class="heroicon-ui"
                d="M12 2a10 10 0 1 1 0 20 10 10 0 0 1 0-20zm0 2a8 8 0 1 0 0 16 8 8 0 0 0 0-16zm0 9a1 1 0 0 1-1-1V8a1 1 0 0 1 2 0v4a1 1 0 0 1-1 1zm0 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
        </svg>
    </div>
    <div>
        <div class="text-sm pb-2">
            {{ $title }}
            <span class="float-right cursor-pointer" x-on:click="show = false">
                <svg class="fill-current text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                    width="22" height="22">
                    <path class="heroicon-ui"
                        d="M16.24 14.83a1 1 0 0 1-1.41 1.41L12 13.41l-2.83 2.83a1 1 0 0 1-1.41-1.41L10.59 12 7.76 9.17a1 1 0 0 1 1.41-1.41L12 10.59l2.83-2.83a1 1 0 0 1 1.41 1.41L13.41 12l2.83 2.83z" />
                </svg>
            </span>
        </div>
        <div class="text-sm text-gray-600  tracking-tight ">
            {{ $description }}
        </div>
    </div>
</div>
<style>
    .notification-box {
        width: {{ $size }};
    }
</style>
