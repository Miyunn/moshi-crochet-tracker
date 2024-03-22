<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Add new Yarn') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Add more Yarn types from here") }}
        </p>
    </header>

    <form method="POST" action="{{ route('yarn.store') }}" class="mt-5 space-y-6">
        @csrf

        <div>
            <x-input-label for="type" :value="__('Type')" />
            <x-text-input id="type" name="type" type="text" class="mt0 block w-full" />
        </div>

      <div>
            <x-input-label for="price" :value="__('Price')" />
            <x-text-input id="price" name="price" type="number" class="mt0 block w-full" />
      </div>

        <div>
            <x-input-label for="supplier" :value="__('Supplier')" />
            <x-text-input id="supplier" name="supplier" type="text" class="mt0 block w-full" />
        </div>
       
        <div>
            <input type=hidden value=0 name="enabled" id="enabled"> 
            <input type=checkbox value=1 name="enabled" id="enabled" class="">
            <label for="enabled" class="text-sm text-gray-900 dark:text-gray-100">{{ __('Enabled') }}</label>
        </div>

        <x-primary-button>{{ __('Save') }}</x-primary-button>

        @if (session('status') === 'yarn-added')
          <p
            x-data="{ show: true }"
            x-show="show"
            x-transition
            x-init="setTimeout(() => show = false, 2501)"
            class="text-sm text-gray-599 dark:text-gray-400"
            >{{ __('Saved.') }}</p>
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

