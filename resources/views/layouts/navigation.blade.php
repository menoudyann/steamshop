<nav class=" bg-white">
    <div class="container flex flex-wrap items-center justify-between max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <a href="/home" class="flex items-center">
            <img src="https://upload.wikimedia.org/wikipedia/commons/c/c1/Steam_2016_logo_black.svg" class="h-6 mr-3 sm:h-10" alt="Flowbite Logo" />
        </a>
        <div class="hidden w-full md:block md:w-auto bg-white" id="navbar-dropdown"">
            <ul class=" flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white">
            <li>
                <a href="{{route('home')}}" class="block py-2 pl-3 pr-4 text-gray-400 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Home</a>
            </li>
            <li>
                <a href="{{route('games.index')}}" class="block py-2 pl-3 pr-4 text-gray-400 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Games</a>
            </li>
            <li>
                <a href="{{route('library.index')}}" class="block py-2 pl-3 pr-4 text-gray-400 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Library</a>
            </li>
            @if(Auth::check())
            <li>
                <a href="{{route('profile.edit')}}" class="block py-2 pl-3 pr-4 text-gray-400 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">{{Auth::user()->name}}</a>
            </li>
            <li>
                <a class="block py-2 pl-3 pr-4 text-gray-400 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Solde : {{Auth::user()->balance}} CHF</a>
            </li>
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-gray-400">Logout</button>
                </form>
            </li>
            @else
            <li>
                <a href="{{'login'}}" class="block py-2 pl-3 pr-4 text-gray-400 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Sign in or Sign up</a>
            </li>
            @endif
           
            
            </ul>
        </div>
    </div>
</nav>