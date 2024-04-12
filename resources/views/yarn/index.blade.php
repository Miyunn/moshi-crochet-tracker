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
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 sm:rounded-lg">
                <div class="min-width:100%">
                    @include('yarn.partials.table-yarn')
                </div>
            </div>
        </div>
    </div>

    <x-modal name="add-yarn" focusable>
        <div class="flex items-center justify-center">
            <div class="py-4 sm:pb-8 bg-white dark:bg-gray-800 sm:rounded-lg w-full max-w-xl">
                @include('yarn.partials.add-yarn-form')
            </div>
        </div>
    </x-modal>

    @if (session('status') === 'yarn-deleted')
        <x-notification-box title="{{ __('Deleted') }}" description="{{ __('Yarn type was removed permenantly') }}" />
    @endif

    @if (session('status') === 'yarn-added')
        <x-notification-box title="{{ __('Saved') }}"
            description="{{ __('New yarn was added to the collection') }}" />
    @endif

    @if (session('status') === 'yarn-updated')
        <x-notification-box title="{{ __('Updated') }}" description="{{ __('Yarn information was updated') }}" />
    @endif
</x-app-layout>
