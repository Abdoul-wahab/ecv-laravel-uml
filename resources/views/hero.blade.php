@extends('layouts.app')

@section('content')
    <div class="mt-16 px-4 sm:mt-24 sm:px-6 lg:mt-32">
        <div class="lg:grid lg:grid-cols-12 lg:gap-8">
            <div class="sm:text-center md:max-w-2xl md:mx-auto lg:col-span-6 lg:text-left">
                <h1>
                    <span class="mt-1 block text-4xl tracking-tight font-extrabold sm:text-5xl xl:text-6xl">
                        <span class="block text-gray-900">On met en location</span>
                        <span class="block text-purple-600">nos véhicules de ouf</span>
                    </span>
                </h1>
                <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
                    Pour plus d'infos contactez Christopher ... Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet
                    fugiat veniam occaecat fugiat aliqua ad ad non deserunt sunt.
                </p>
            </div>
            <div
                class="mt-12 relative sm:max-w-lg sm:mx-auto lg:mt-0 lg:max-w-none lg:mx-0 lg:col-span-6 lg:flex lg:items-center">
                <svg class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-8 scale-75 origin-top sm:scale-100 lg:hidden"
                    width="640" height="784" fill="none" viewBox="0 0 640 784" aria-hidden="true">
                    <defs>
                        <pattern id="4f4f415c-a0e9-44c2-9601-6ded5a34a13e" x="118" y="0" width="20" height="20"
                            patternUnits="userSpaceOnUse">
                            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"></rect>
                        </pattern>
                    </defs>
                    <rect y="72" width="640" height="640" class="text-gray-50" fill="currentColor"></rect>
                    <rect x="118" width="404" height="784" fill="url(#4f4f415c-a0e9-44c2-9601-6ded5a34a13e)"></rect>
                </svg>
                <div class="relative mx-auto w-full rounded-lg shadow-lg lg:max-w-md">
                    <button type="button"
                        class="relative block w-full bg-white rounded-lg overflow-hidden focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                        <span class="sr-only">Watch our video to learn more</span>
                        <img class="w-full h-full"
                            src="{{ asset('img/hero.gif') }}"
                            alt="">
                        <div class="absolute inset-0 w-full h-full flex items-center justify-center" aria-hidden="true">
                            <svg class="h-20 w-20 text-purple-500" fill="currentColor" viewBox="0 0 84 84">
                                <circle opacity="0.9" cx="42" cy="42" r="42" fill="white"></circle>
                                <path
                                    d="M55.5039 40.3359L37.1094 28.0729C35.7803 27.1869 34 28.1396 34 29.737V54.263C34 55.8604 35.7803 56.8131 37.1094 55.9271L55.5038 43.6641C56.6913 42.8725 56.6913 41.1275 55.5039 40.3359Z">
                                </path>
                            </svg>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-16">
        <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">
            <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('{{ asset('img/unnamed.jpeg')}}')">
                    <a href="#" class="p-2 rounded-full bg-purple-600 text-white mx-5 -mb-4 hover:bg-purple-500 focus:outline-none focus:bg-purple-500">
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
                    <a href="#" class="p-2 rounded-full bg-purple-600 text-white mx-5 -mb-4 hover:bg-purple-500 focus:outline-none focus:bg-purple-500">
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
                    <a href="#" class="p-2 rounded-full bg-purple-600 text-white mx-5 -mb-4 hover:bg-purple-500 focus:outline-none focus:bg-purple-500">
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
                    <a href="#" class="p-2 rounded-full bg-purple-600 text-white mx-5 -mb-4 hover:bg-purple-500 focus:outline-none focus:bg-purple-500">
                        Louer
                    </a>
                </div>
                <div class="px-5 py-3">
                    <h3 class="text-gray-700 uppercase">woman mix</h3>
                    <span class="text-gray-500 mt-2">$12</span>
                </div>
            </div>
        </div>
    </div>

    {{-- <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap -m-4">
              @foreach ($vehicules as $vehicule)
                <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                    <a href class="block relative h-48 rounded overflow-hidden">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                            src="{{ $vehicule['image_url'] }}" />
                    </a>
                    <div class="mt-4">
                        <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">
                            {{ $vehicule['address'] }}
                        </h3>
                        <h2 class="text-gray-900 title-font text-lg font-medium">
                          {{ $vehicule['type'] }}
                        </h2>
                        <p class="mt-1">{{ $vehicule['price'] }} € HT/ mois </p>
                    </div>
                </div>
              @endforeach
            </div>
        </div>
    </section> --}}
@endsection
