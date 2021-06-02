<nav class="relative mx-auto flex items-center justify-between px-4 sm:px-6" aria-label="Global">
    <div class="flex items-center flex-1">
        <div class="flex items-center justify-between w-full md:w-auto">
            <a href="{{ url('/') }}">
                <span class="sr-only">Workflow</span>
                <img class="h-8 w-auto sm:h-10" src="https://tailwindui.com/img/logos/workflow-mark-purple-600.svg"
                    alt="">
            </a>
        </div>
        <div class="hidden md:block md:ml-10 md:space-x-10">

            <a href="{{ url('/') }}" class="font-medium text-gray-500 hover:text-gray-900">Accueil</a>

            <a href="{{ url('/') }}" class="font-medium text-gray-500 hover:text-gray-900">Je loue</a>

            <a href="{{ url('/contact') }}" class="font-medium text-gray-500 hover:text-gray-900">Nous contacter</a>

            <a href="{{ url('/faq') }}" class="font-medium text-gray-500 hover:text-gray-900">FAQ</a>

        </div>
    </div>
    <div class="hidden md:block text-right">
        <span class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">
            @guest
                @if (Route::has('login'))
                    <a href="{{ route('login') }}"
                        class="inline-flex rounded-md shadow-md ring-1 ring-black ring-opacity-5 items-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-purple-600 bg-white hover:bg-gray-50">
                        {{ __('Connexion') }}
                    </a>
                @endif
                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        class="rounded-md shadow-md ring-1 ring-black ring-opacity-5 hover:no-underline ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-purple-600 hover:bg-purple-700">
                        {{ __('Louer Maintenant !!!!') }}
                    </a>
                @endif
            @else
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"
                    class="hover:no-underline ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-purple-600 hover:bg-purple-700">
                    {{ __('Déconnexion') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                    @csrf
                </form>
            @endguest
        </span>
    </div>
</nav>
