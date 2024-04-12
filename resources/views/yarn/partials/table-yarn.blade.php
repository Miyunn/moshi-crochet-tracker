<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('All Yarn') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('You can update or delete yarn from here') }}
        </p>
    </header>

    <table class="table min-w-full divide-y divide-gray-200 dark:divide-gray-600 overflow-x-auto mt-6">
        <thead class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                    Type
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                    Price
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                    Display
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                    Actions
                </th>
            </tr>
        </thead>

        <tbody class="border-gray-300 dark:border-gray-700 dark:bg-gray-950 dark:text-gray-300">
            @foreach ($yarns as $yarn)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div>
                                <div class="text-m">
                                    {{ $yarn->type }}
                                </div>
                                <div class="text-sm text-gray-500">
                                    {{ $yarn->supplier }}
                                </div>
                            </div>
                        </div>
                    </td>

                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                        {{ $yarn->price }} LKR
                    </td>

                    <td class="px-6 py-4 whitespace-nowrap">
                        @if ($yarn->enabled)
                            <span
                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 dark:bg-green-200 text-green-800">
                                &nbsp; Active &nbsp;
                            </span>
                        @else
                            <span
                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 dark:bg-red-200 text-red-800">
                                Disabled
                            </span>
                        @endif

                    </td>

                    <td class="px-6 py-4 whitespace-nowrap  text-sm font-medium">
                        <button x-data=""
                            x-on:click.prevent="$dispatch('open-modal', 'edit-yarn{{ $yarn->id }}')"
                            class="text-gray-500 hover:text-gray-300">
                            {{ __('Edit') }}
                        </button>

                        <button x-data=""
                            x-on:click.prevent="$dispatch('open-modal', 'confirm-delete-yarn{{ $yarn->id }}')"
                            class="ml-4 text-gray-500 hover:text-red-600">
                            {{ __('Delete') }}
                        </button>
                    </td>
                </tr>

                @include('yarn.partials.delete-yarn-modal')
                @include('yarn.partials.edit-yarn-modal')
            @endforeach


        </tbody>
    </table>
</section>
