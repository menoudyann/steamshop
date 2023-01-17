<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="bg-white ">
                        <div class="mx-auto max-w-7xl px-6 lg:px-8">
                            <div class="sm:text-left">
                                <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Lastest release</p>
                            </div>
                            <div class="mt-20 max-w-lg sm:mx-auto md:max-w-none">
                                <div class="grid grid-cols-1 gap-y-16 md:grid-cols-2 md:gap-x-12 md:gap-y-16">
                                    @foreach ($games as $game)
                                    <div class="relative flex flex-col gap-6 sm:flex-row md:flex-col lg:flex-row">
                                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-indigo-500 text-white sm:shrink-0">
                                        <img class="rounded-lg" src=" {{asset('images/game-03.jpg')}}" />
                                        </div>
                                        <div class="sm:min-w-0 sm:flex-1">
                                            <p class="text-lg font-semibold leading-8 text-gray-900">{{$game->name}}</p>
                                            <p class="mt-2 text-base leading-7 text-gray-600">{{$game->description}}</p>
                                            <form action="{{ route('games.destroy', $game) }}" method="POST" class="my-4">
                                                @csrf
                                                <div>
                                                    <button type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Buy</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>