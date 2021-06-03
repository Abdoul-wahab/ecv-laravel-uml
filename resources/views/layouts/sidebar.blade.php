<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="js/app.js" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="css/app.css" rel="stylesheet">
</head>

<body>
<div style="min-height: 640px" class="bg-gray-100">
    <div class="h-screen bg-white overflow-hidden flex" x-data="{ sidebarOpen: false }"
        @keydown.window.escape="sidebarOpen = false">
        <div x-show="sidebarOpen" class="md:hidden"
            x-description="Off-canvas menu for mobile, show/hide based on off-canvas menu state.">
            <div class="fixed inset-0 z-40 flex">
                <div class="flex-shrink-0 w-14">
                    <!-- Dummy element to force sidebar to shrink to fit close icon -->
                </div>
            </div>
        </div>

        <!-- Static sidebar for desktop -->
        <div class="hidden md:flex md:flex-shrink-0">
            <div class="w-64 flex flex-col">
                <!-- Sidebar component, swap this element with another sidebar if you like -->
                <div class=" border-r border-gray-200 pt-5 pb-4 flex flex-col flex-grow overflow-y-auto ">
                    {{-- <div class="flex-shrink-0 px-4 flex items-center">
                        <img class="h-8 w-auto"
                            src="https://tailwindui.com/img/logos/workflow-logo-purple-600-mark-gray-800-text.svg"
                            alt="Workflow" />
                    </div> --}}
                    <div class="flex-grow mt-5 flex flex-col">
                        <nav class="flex-1 bg-white px-2 space-y-1">
                            <!-- Current: "bg-gray-100 text-gray-900", Default: "text-gray-600 hover:bg-gray-50 hover:text-gray-900" -->
                            <a href="{{ route('vehicules.index') }}" class="@if (Route::current()->getName() === 'vehicules.index') bg-gray-100 text-gray-900 @else text-gray-600 hover:bg-gray-50 hover:text-gray-900 @endif group rounded-md py-2 px-2 flex items-center text-sm font-medium ">
                                <!-- Current: "text-gray-500", Default: "text-gray-400 group-hover:text-gray-500" -->
                                <svg class="@if (Route::current()->getName() === 'controle') text-gray-500 @else text-gray-400 group-hover:text-gray-500 @endif mr-3 h-6 w-6" x-description="Heroicon name: outline/home"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                    </path>
                                </svg>
                                Véhicules
                            </a>


                            <!-- Current: "bg-gray-100 text-gray-900", Default: "text-gray-600 hover:bg-gray-50 hover:text-gray-900" -->
                            <a href="{{ route('vehicule-create') }}" class="@if (Route::current()->getName() === 'vehicule-create') bg-gray-100 text-gray-900 @else text-gray-600 hover:bg-gray-50 hover:text-gray-900 @endif group rounded-md py-2 px-2 flex items-center text-sm font-medium ">
                                <!-- Current: "text-gray-500", Default: "text-gray-400 group-hover:text-gray-500" -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="@if (Route::current()->getName() === 'controle') text-gray-500 @else text-gray-400 group-hover:text-gray-500 @endif mr-3 h-6 w-6" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM14 11a1 1 0 011 1v1h1a1 1 0 110 2h-1v1a1 1 0 11-2 0v-1h-1a1 1 0 110-2h1v-1a1 1 0 011-1z" />
                                </svg>
                                Ajouter un vehicule
                            </a>

                            <a href="{{ route('controles.index') }}" class="@if (Route::current()->getName() === 'controles.index') bg-gray-100 text-gray-900 @else text-gray-600 hover:bg-gray-50 hover:text-gray-900 @endif group rounded-md py-2 px-2 flex items-center text-sm font-medium ">

                                <svg xmlns="http://www.w3.org/2000/svg" class="@if (Route::current()->getName() === 'controle') text-gray-500 @else text-gray-400 group-hover:text-gray-500 @endif mr-3 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                                Contrôles
                            </a>

                            <a href="{{ route('employes.index') }}" class="@if (Route::current()->getName() === 'employes.index') bg-gray-100 text-gray-900 @else text-gray-600 hover:bg-gray-50 hover:text-gray-900 @endif group rounded-md py-2 px-2 flex items-center text-sm font-medium ">
                                <svg class="@if (Route::current()->getName() === 'controle') text-gray-500 @else text-gray-400 group-hover:text-gray-500 @endif mr-3 h-6 w-6" x-description="Heroicon name: outline/folder" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z">
                                    </path>
                                </svg>
                                Employés
                            </a>

                            <a href="{{ route('contrats.index') }}" class="@if (Route::current()->getName() === 'contrats.index') bg-gray-100 text-gray-900 @else text-gray-600 hover:bg-gray-50 hover:text-gray-900 @endif group rounded-md py-2 px-2 flex items-center text-sm font-medium ">
                                <svg class="@if (Route::current()->getName() === 'controle') text-gray-500 @else text-gray-400 group-hover:text-gray-500 @endif mr-3 h-6 w-6" x-description="Heroicon name: outline/calendar" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                    </path>
                                </svg>
                                Contrats
                            </a>

                        <a href="{{ route('locations.index') }}" class="@if (Route::current()->getName() === 'locations.index') bg-gray-100 text-gray-900 @else text-gray-600 hover:bg-gray-50 hover:text-gray-900 @endif group rounded-md py-2 px-2 flex items-center text-sm font-medium ">
                                <svg class="@if (Route::current()->getName() === 'controle') text-gray-500 @else text-gray-400 group-hover:text-gray-500 @endif mr-3 h-6 w-6" x-description="Heroicon name: outline/inbox" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4">
                                    </path>
                                </svg>
                                Locations
                            </a>

                            <a href="{{ route('logout') }}" class="@if (Route::current()->getName() === 'logout') bg-gray-100 text-gray-900 @else text-gray-600 hover:bg-gray-50 hover:text-gray-900 @endif group rounded-md py-2 px-2 flex items-center text-sm font-medium "
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="@if (Route::current()->getName() === 'controle') text-gray-500 @else text-gray-400 group-hover:text-gray-500 @endif mr-3 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                  </svg>
                                  {{ __('Déconnexion') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                @csrf
                            </form>
                            
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex-1 max-w-4xl mx-auto w-0 flex flex-col md:px-8 xl:px-0">
            <div class=" relative z-10 flex-shrink-0 h-16 bg-white border-b border-gray-200 flex ">
                <button @click.stop="sidebarOpen = true" class=" border-r border-gray-200 px-4 text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-purple-500 md:hidden ">
                    <span class="sr-only">Open sidebar</span>
                    <svg class="h-6 w-6" x-description="Heroicon name: outline/menu-alt-2"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h7"></path>
                    </svg>
                </button>
                <div class="flex-1 flex justify-between px-4 md:px-0">
                    <div class="flex-1 flex">
                        <form class="w-full flex md:ml-0" action="#" method="GET">
                            <label for="search_field" class="sr-only">Search</label>
                            <div class=" relative w-full text-gray-400 focus-within:text-gray-600 ">
                                <div class=" pointer-events-none absolute inset-y-0 left-0 flex items-center ">
                                    <svg class="h-5 w-5" x-description="Heroicon name: solid/search"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input id="search_field" class="block h-full w-full border-transparent py-2 pl-8 pr-3 text-gray-900 placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:ring-0 focus:border-transparent sm:text-sm " placeholder="Search" type="search" name="search" />
                            </div>
                        </form>
                    </div>
                    <div class="ml-4 flex items-center md:ml-6">
                        <!-- Profile dropdown -->
                        <div x-data="{ open: false }" @keydown.escape.stop="open = false" @click.away="open = false"
                            class="ml-3 relative">
                            <div>
                                <button type="button" class="max-w-xs flex items-center text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500" id="user-menu" aria-expanded="false" @click="open = !open" aria-haspopup="true"
                                    x-bind:aria-expanded="open">
                                    <span class="sr-only">Open user menu</span>
                                    <img class="h-8 w-8 rounded-full"
                                        src="https://www.skillsjunxion.com/assets/themes/ofabee/img/avatar.png"
                                        alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <main class="flex-1 relative overflow-y-auto focus:outline-none">
                <div class="py-6">
                    <div class="px-4 sm:px-6 md:px-0">
                        <!-- Replace with your content -->
                        <div class="py-4">
                            @yield('content')
                        </div>
                        <!-- /End replace -->
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>
</body>
</html>
