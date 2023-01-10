<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md mx-10 mt-10">
        <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Image</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Name</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Release at</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Price</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900" align="right"></th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                <?php foreach ($games as $game) : ?>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4"><img class="rounded-lg" src=" {{asset('images/game-03.jpg')}}" />
                        </td>
                        <td class="px-6 py-4">
                            <h4><?= $game->name ?></h4>
                        </td>
                        <td class="px-6 py-4">
                            <h4><?= $game->released_at ?></h4>
                        </td>
                        <td class="px-6 py-4">
                            <h4><?= $game->price ?> CHF</h4>
                        </td>
                        <td class="px-6 py-4" align="right">
                            <form action="{{ route('games.destroy', $game) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <div>
                                    <button type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Edit</button>
                                    <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
                                </div>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</x-app-layout>