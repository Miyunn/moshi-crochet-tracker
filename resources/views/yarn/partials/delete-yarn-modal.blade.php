<x-modal name="confirm-delete-yarn{{ $yarn->id }}" focusable>
    <form method="post" action="{{ route('yarn.delete') }}" class="p-3">
        @csrf
        @method('delete')

        <div class="mx-7">
            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                {{ __('Are you sure you want to delete ') }}
                <span class="font-black"> {{ $yarn->type }} </span>
                {{ __(' from the yarn list?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                {{ __('This action will remove the this yarn type permentantly. If you meant to disable it you can do it from the edit option') }}
            </p>

            <input type="hidden" name="id" value="{{ $yarn->id }}">

            <div class="mt-6 mb-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-danger-button class="ms-3">
                    {{ __('Delete') }}
                </x-danger-button>
            </div>
        </div>
    </form>
</x-modal>
