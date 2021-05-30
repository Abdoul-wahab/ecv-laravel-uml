<nav class="relative mx-auto flex items-center justify-between px-4 sm:px-6" aria-label="Global">
    <div class="flex items-center flex-1">
        <div class="flex items-center justify-between w-full md:w-auto">
            <a href="{{ url('/') }}">
                <span class="sr-only">Workflow</span>
                <img class="h-8 w-auto sm:h-10" src="https://tailwindui.com/img/logos/workflow-mark-purple-600.svg"
                    alt="">
            </a>
            <div class="-mr-2 flex items-center md:hidden">
                <button type="button"
                    class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-purple-500"
                    @click="toggle" @mousedown="if (open) $event.preventDefault()" aria-expanded="false"
                    :aria-expanded="open.toString()">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6" x-description="Heroicon name: outline/menu" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
        <div class="hidden md:block md:ml-10 md:space-x-10">

            <a href="{{ url('/') }}" class="font-medium text-gray-500 hover:text-gray-900">Accueil</a>

            <a href="{{ url('/') }}" class="font-medium text-gray-500 hover:text-gray-900">Features</a>

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
                        {{ __('Créer un compte') }}
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


<transition enter-active-class="duration-150 ease-out" enter-class="opacity-0 scale-95"
    enter-to-class="opacity-100 scale-100" leave-active-class="duration-100 ease-in" leave-class="opacity-100 scale-100"
    leave-to-class="opacity-0 scale-95">
    <div x-show="open" x-description="Mobile menu, show/hide based on menu open state."
        class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden" x-ref="panel"
        @click.away="open = false">
        <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
            <div class="px-5 pt-4 flex items-center justify-between">
                <div>
                    <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-purple-600.svg" alt="">
                </div>
                <div class="-mr-2">
                    <button type="button"
                        class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-purple-500"
                        @click="toggle">
                        <span class="sr-only">Close main menu</span>
                        <svg class="h-6 w-6" x-description="Heroicon name: outline/x" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="px-2 pt-2 pb-3 space-y-1">

                <a href="{{ url('/') }}"
                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Product</a>

                <a href="{{ url('/') }}"
                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Features</a>

                <a href="{{ url('/') }}"
                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Marketplace</a>

                <a href="{{ url('/') }}"
                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Company</a>

            </div>
            <a href="{{ url('/login') }}"
                class="block w-full px-5 py-3 text-center font-medium text-purple-600 bg-gray-50 hover:bg-gray-100">
                Se connecter
            </a>
        </div>
    </div>
</transition>
