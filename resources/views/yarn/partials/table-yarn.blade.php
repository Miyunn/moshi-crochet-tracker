<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('All Yarn') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Manage your yarn from here") }}
        </p>
    </header>

    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600 overflow-x-auto mt-6">
        <thead class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
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

        <tbody class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="flex items-center">
                        <div>
                            <div class="text-m">
                               Milk Cotton 
                            </div>
                            <div class="text-sm text-gray-500">
                                Yo Yarn
                            </div>
                        </div>
                    </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm">
                    350 LKR 
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                        &nbsp; Active &nbsp;
                    </span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap  text-sm font-medium">
                    <a href="#" class="text-gray-500 hover:text-gray-300">Edit</a>
                    <a href="#" class="ml-4 text-gray-500 hover:text-red-600">Delete</a>
                </td>
            </tr>

            <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="flex items-center">
                        <div>
                            <div class="text-m">
                              Velvet 
                            </div>
                            <div class="text-sm text-gray-500">
                                Yo Yarn
                            </div>
                        </div>
                    </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm">
                   500 LKR 
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                        &nbsp; Active &nbsp;
                    </span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap  text-sm font-medium">
                    <a href="#" class="text-gray-500 hover:text-gray-300">Edit</a>
                    <a href="#" class="ml-4 text-gray-500 hover:text-red-600">Delete</a>
                </td>
            </tr>

            <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="flex items-center">
                        <div>
                            <div class="text-m">
                                Acrylic 
                            </div>
                            <div class="text-sm text-gray-500">
                                Ali-Express
                            </div>
                        </div>
                    </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm">
                   800 LKR 
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                       Disabled 
                    </span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap  text-sm font-medium">
                    <a href="#" class="text-gray-500 hover:text-gray-300">Edit</a>
                    <a href="#" class="ml-4 text-gray-500 hover:text-red-600">Delete</a>
                </td>
            </tr>
        </tbody>
    </table>
</section>