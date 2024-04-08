<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Generate a quotataion') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @include('quotation.partials.calculate-yarn')
                </div>

                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @include('quotation.partials.calculate-labour')
                </div>

                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @include('quotation.partials.calculate-other')
                </div>

                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @include('quotation.partials.calculate-shipping')
                </div>

                <hr class="border-b border-gray-200 dark:border-gray-700" />

                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @include('quotation.partials.quotation-table')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
