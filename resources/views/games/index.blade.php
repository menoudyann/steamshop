<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md mx-10 mt-10">
                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif
                <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-4 font-medium text-gray-900">Image</th>
                            <th scope="col" class="px-6 py-4 font-medium text-gray-900">Name</th>
                            <th scope="col" class="px-6 py-4 font-medium text-gray-900">Price at</th>
                            <th scope="col" class="px-6 py-4 font-medium text-gray-900"></th>
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
                                <h4><?= $game->price ?></h4>
                            </td>
                            <td class="px-6 py-4" align="right">
                                <form action="{{route('library.store')}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="game_id" id="game_id" value="{{ $game->id }}" />
                                    <div>
                                        <button type="submit" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Buy</button>
                                    </div>
                                </form>
                            </td>
                            <td class="px-6 py-4" align="right">
                                <form action="{{ route('games.destroy', $game) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <div>
                                        <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
                                    </div>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @if (Auth::check())
                <div class="container py-10 px-10 mx-0 min-w-full flex flex-col items-center bg-white">
                    <form action="{{ route('games.create') }}" method="GET">
                        <button type="submit" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Add a new game</button>
                    </form>
                </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>