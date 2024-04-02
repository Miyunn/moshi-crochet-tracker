<section id="add-yarn-form">
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Add new Yarn') }}
        </h2>
        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Add more Yarn types from here') }}
        </p>
    </header>

    <form method="POST" action="{{ route('yarn.store') }}" class="mt-5 space-y-6">
        @csrf

        <div>
            <x-input-label for="type" :value="__('Type')" />
            <x-text-input id="type" name="type" type="text" class="mt0 block w-full" />
        </div>

        <div>
            <x-input-label for="supplier" :value="__('Supplier')" />
            <x-text-input id="supplier" name="supplier" type="text" class="mt0 block w-full" />
        </div>

        <div>
            <x-input-label for="price" :value="__('Price')" />
            <x-text-input id="price" name="price" type="number" class="mt0 block w-full" />
        </div>

        <div class="flex items-center">
            <input id="enabled" name="enabled" type="hidden" value="0">
            <input checked id="enabled" name="enabled" type="checkbox" value="1"
                class="w-4 h-4 text-blue-600 
            bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 
            dark:bg-gray-700 dark:border-gray-600">
            <label for="checked-checkbox" class="ms-2 text-sm font-medium text-gray-600 dark:text-gray-400">Display in
                quotation</label>
        </div>

        <div class="my-6 flex">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            <x-secondary-button x-on:click="$dispatch('close')" class="ml-3">
                {{ __('Cancel') }}
            </x-secondary-button>
        </div>

        @if (session('status') === 'yarn-added')
            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2501)"
                class="text-sm text-gray-599 dark:text-gray-400">{{ __('Saved.') }}</p>
        @endif

        @if ($errors->any())
            <div class="text-red-500 text-sm">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>
</section>
