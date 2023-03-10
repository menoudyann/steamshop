<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="my-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md mx-10 mt-10 bg-white py-6 ">
                <div class="w-full text-center ">
                    <h1 class="my-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl">Votre solde est de {{Auth::user()->balance}} CHF</h1>
                    <form action="{{route('updateBalance')}}" method="GET">
                        @csrf
                        <div>
                            <button type="submit" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Add to my balance</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="my-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
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
                        @foreach ($games as $game)
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
                                <form action="{{route('games.index')}}" method="GET">
                                    @csrf
                                    <div>
                                        <button type="submit" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">View in Catalog</button>
                                    </div>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>