<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Default auto fills values') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update your default auto fill values for quotations from here") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('config.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="hourly_rate" :value="__('Hourly Rate (Labour)')" />
            <x-text-input id="hourly_rate" name="hourly_rate" type="number" class="mt-1 block w-full" :value="old('hourly_rate', $basicConfig->hourly_rate)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('hourly_rate')" />
        </div>

        <div>
            <x-input-label for="yarn_delivery_price" :value="__('Yarn delivery cost')" />
            <x-text-input id="yarn_delivery_price" name="yarn_delivery_price" type="number" class="mt-1 block w-full" :value="old('yarn_delivery_price', $basicConfig->yarn_delivery_price)" required autocomplete="yarn_delivery_cost" />
            <x-input-error class="mt-2" :messages="$errors->get('yarn_delivery_price')" />
        </div>
 
        <div>
            <x-input-label for="default_package_cost" :value="__('Packaging cost')" />
            <x-text-input id="default_package_cost" name="default_package_cost" type="number" class="mt-1 block w-full" :value="old('default_pacakge_cost', $basicConfig->default_package_cost)" required autocomplete="default_package_cost" />
            <x-input-error class="mt-2" :messages="$errors->get('default_package_cost')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'config-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2500)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
