@extends('layouts.app')

@section('content')
<div class="bg-white">
    {{-- <header>
        <div class="container mx-auto px-6 py-3">
            <nav :class="isOpen ? '' : 'hidden'" class="sm:flex sm:justify-center sm:items-center mt-4">
                <div class="flex flex-col sm:flex-row">
                    <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="#">Home</a>
                    <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="#">Shop</a>
                    <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="#">Categories</a>
                    <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="#">Contact</a>
                    <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="#">About</a>
                </div>
            </nav>
            <div class="relative mt-6 max-w-lg mx-auto">
            <span class="absolute inset-y-0 left-0 pl-3 flex items-center">
                <svg class="h-5 w-5 text-gray-500" viewBox="0 0 24 24" fill="none">
                    <path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </span>

                <input class="w-full border rounded-md pl-10 pr-4 py-2 focus:border-blue-500 focus:outline-none focus:shadow-outline" type="text" placeholder="Search">
            </div>
        </div>
    </header> --}}
    <main class="my-8">
        <div class="container mx-auto px-6">
            <div class="md:flex md:items-center">
                <div class="w-full h-64 md:w-1/2 lg:h-96">
                    <img class="h-full w-full rounded-md object-cover max-w-lg mx-auto" src="{{ asset('img/2.jpeg') }}" alt="Nike Air">
                </div>
                <div class="w-full max-w-lg mx-auto mt-5 md:ml-8 md:mt-0 md:w-1/2">
                    <h3 class="text-gray-700 uppercase text-lg">Ma voiture test</h3>
                    <span class="text-gray-500 mt-3">$125</span>
                    <hr class="my-3">
                    {{-- <div class="mt-2">
                        <label class="text-gray-700 text-sm" for="count">Nombre de véhicules souhaité:</label>
                        <div class="flex items-center mt-1">
                            
                        </div>
                    </div> --}}
                    <div class="flex items-center mt-6">
                        <button class="px-8 py-2 bg-indigo-600 text-white text-sm font-medium rounded hover:bg-indigo-500 focus:outline-none focus:bg-indigo-500">Louer maintenant</button>
                    </div>
                </div>
            </div>
            {{-- <div class="mt-16">
                <h3 class="text-gray-600 text-2xl font-medium">More Products</h3>
                <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">
                    <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                        <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('{{ asset('img/unnamed.jpeg')}}')">
                            <a href="#" class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                                Louer
                            </a>
                        </div>
                        <div class="px-5 py-3">
                            <h3 class="text-gray-700 uppercase">Chanel</h3>
                            <span class="text-gray-500 mt-2">$12</span>
                        </div>
                    </div>
                    <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                        <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('{{ asset('img/unnamed.jpeg')}}')">
                            <a href="#" class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                                Louer
                            </a>
                        </div>
                        <div class="px-5 py-3">
                            <h3 class="text-gray-700 uppercase">Man Mix</h3>
                            <span class="text-gray-500 mt-2">$12</span>
                        </div>
                    </div>
                    <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                        <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('{{ asset('img/unnamed.jpeg')}}')">
                            <a href="#" class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                                Louer
                            </a>
                        </div>
                        <div class="px-5 py-3">
                            <h3 class="text-gray-700 uppercase">Classic watch</h3>
                            <span class="text-gray-500 mt-2">$12</span>
                        </div>
                    </div>
                    <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                        <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('{{ asset('img/unnamed.jpeg')}}')">
                            <a href="#" class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                                Louer
                            </a>
                        </div>
                        <div class="px-5 py-3">
                            <h3 class="text-gray-700 uppercase">woman mix</h3>
                            <span class="text-gray-500 mt-2">$12</span>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </main>
</div>

@endsection