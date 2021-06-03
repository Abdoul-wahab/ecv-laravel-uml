@extends('layouts.sidebar')

@section('content')

<main class="my-8">
    <div class="container mx-auto px-6">
        <div class="md:flex md:items-center">
            <div class="w-full h-64 md:w-1/2 lg:h-96">
                <img class="h-full w-full rounded-md object-cover max-w-lg mx-auto" src="{{ asset('img/2.jpeg') }}" alt="Nike Air">
            </div>
            <div class="w-full max-w-lg mx-auto mt-5 md:ml-8 md:mt-0 md:w-1/2">
                <h3 class="text-gray-700 uppercase text-lg">Ma voiture test</h3>
                <span class="text-gray-500 mt-3">{{contrat->prix}}</span>
                <span class="text-gray-500 mt-3">{{contrat->date}}</span>
                <span class="text-gray-500 mt-3">{{contrat->content}}</span>
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
    </div>
</main>

@endsection