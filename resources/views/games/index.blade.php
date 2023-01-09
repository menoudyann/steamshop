<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md mx-10">
        <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900"></th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Name</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Release at</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">price</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                <?php foreach ($games as $game) : ?>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4"><img src=" {{asset('images/game-03.jpg')}}" />
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
                        <td class="px-6 py-4">
                            @if (Auth::check())
                            <form action="{{ route('games.destroy', $game) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <div class="main-button">
                                    <button class="btn btn-danger" style="height: 40px; width: 40px"><i class="fa fa-trash"></i></button>
                                </div>
                            </form>
                            @endif
                        </td>
                    </tr>
                <?php endforeach; ?>
                @if (Auth::check())
                <div class="main-button">
                    <a href="{{ route('games.create') }}">Add a new game</a>
                </div>
                @endif
            </tbody>
        </table>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
</x-app-layout>