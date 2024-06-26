<x-modal name="edit-yarn{{ $yarn->id }}" focusable>
    <div class="flex items-center justify-center pt-6">
        <div class="sm:pb-6 bg-white dark:bg-gray-800 sm:rounded-lg w-full max-w-xl">
            <header>
                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                    {{ __('Edit ') }} {{ $yarn->type }} {{ __(' Yarn') }}
                </h2>
            </header>

            <form method="POST" action="{{ route('yarn.update') }}" class="mt-5">
                @csrf
                @method('PATCH')

                <input type="hidden" name="id" value="{{ $yarn->id }}">
                <input type="hidden" name="type" value="{{ $yarn->type }}">

                <div class="pb-3">
                    <x-input-label for="supplier" :value="__('Supplier')" />
                    <x-text-input id="supplier" name="supplier" type="text" class="mt0 block w-full"
                        :value="old('type', $yarn->supplier)" required autofocus autocomplete="supplier" />
                </div>

                <div class="py-3">
                    <x-input-label for="price" :value="__('Price')" />
                    <x-text-input id="price" name="price" type="number" class="mt0 block w-full"
                        :value="old('price', $yarn->price)" required autofocus autocomplete="price" />
                </div>

                <div class="flex items-center py-3">
                    <input id="enabled" name="enabled" type="hidden" value="0">
                    <input {{ $yarn->enabled == 1 ? 'checked' : '' }} id="enabled" name="enabled" type="checkbox"
                        value="1"
                        class="w-4 h-4 text-blue-600 
                        bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 
                        dark:bg-gray-700 dark:border-gray-600">
                    <label for="checked-checkbox"
                        class="ms-2 text-sm font-medium text-gray-600 dark:text-gray-400">Display in
                        quotation</label>
                </div>

                <div class="mt-3 mb-2 flex">
                    <x-primary-button>{{ __('Save') }}</x-primary-button>

                    <x-secondary-button x-on:click="$dispatch('close')" class="ml-3">
                        {{ __('Cancel') }}
                    </x-secondary-button>
                </div>

                {{-- Notification with re opening modal
                @if (session('status') === 'yarn-updated')
                    <div x-init="$dispatch('open-modal', 'edit-yarn{{ session('updated-id') }}')" />
                    <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2501)"
                        class="text-sm text-gray-599 dark:text-gray-400">{{ __('Saved.') }}
                    </p>
                @endif
                --}}

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
        </div>
    </div>
</x-modal>
