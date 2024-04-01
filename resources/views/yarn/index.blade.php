<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Manage Yarn') }}
            </h2>
            @include('yarn.partials.control-yarn')
        </div>
    </x-slot>

    <div class="pt-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="min-width:100%">
                    @include('yarn.partials.table-yarn')
                </div>
            </div>
        </div>
    </div>

    <x-modal name="add-yarn" focusable>
        <div class="flex justify-between">
            <div> </div>
            <button class="text-blue-600 dark:text-gray-400 align-left p-3" x-on:click="$dispatch('close')">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <div class="flex items-center justify-center">
            <div class="pb-4 sm:pb-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg w-full max-w-xl">
                @include('yarn.partials.add-yarn-form')
            </div>
        </div>
    </x-modal>
</x-app-layout>
