<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('All Yarn') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Manage your yarn from here") }}
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
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                        &nbsp; Active &nbsp;
                    </span>

                    @else
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                        Disabled
                    </span>
                    @endif

                </td>
                <td class="px-6 py-4 whitespace-nowrap  text-sm font-medium">
                    <a href="#" class="text-gray-500 hover:text-gray-300">Edit</a>
                    <a href="#" class="ml-4 text-gray-500 hover:text-red-600">Delete</a>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</section>