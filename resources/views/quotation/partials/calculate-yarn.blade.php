<section>
    <x-heading-sub value="{{ __('Yarn') }}" />
    {{-- This UI needs to be thought over again --}}

    <div class="flex">
        <select name="yarn_id" id="yarn_id"
            class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm h-full">
            <option disabled selected="selected">Yarn Type</option>
            <option value="1">Yarn 1</option>
            <option value="2">Yarn 2</option>
            <option value="3">Yarn 3</option>
        </select>
        {{--
            @foreach ($yarns as $yarn)
                <option value="{{ $yarn->id }}">{{ $yarn->type }}</option>
            @endforeach

        <x-input-error :messages="$errors->calculateYarn->get('yarn_id')" class="mt-2" />
            --}}

        <div class="mt-2">
            <x-text-input id="update_password_current_password" name="current_password" type="text"
                class="block w-full" autocomplete="current-password" placeholder="Yarn Type" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>
        <div>
            <x-text-input id="update_password_current_password" name="current_password" type="password"
                class="mt-2 block w-full" autocomplete="current-password" placeholder="Price" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>
        <div>
            <x-text-input id="update_password_current_password" name="current_password" type="password"
                class="mt-2 block w-full" autocomplete="current-password" placeholder="Quantity" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>
    </div>
</section>
