@extends('layouts.sidebar')

@section('content')
<div class="flex flex-wrap -m-4">
    {{-- @foreach ($vehicules as $vehicule)
    <div class="lg:w-1/3 md:w-1/3 p-4 w-full">
        <div class="wrapper antialiased text-gray-900">
            <div>
                <img src="{{ $vehicule['image_url'] }}"
                    class="w-full object-cover object-center rounded-lg shadow-md">

                <div class="relative px-4 -mt-16  ">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <div class="flex items-baseline">
                            <div class="ml-2 text-gray-600 uppercase text-xs font-semibold tracking-wider">
                                {{ $vehicule['address'] }}
                            </div>
                        </div>

                        <h4 class="mt-1 text-xl font-semibold uppercase leading-tight truncate">{{ $vehicule['type'] }}</h4>

                        <div class="mt-1">
                            {{ $vehicule['price'] }} € HT/ mois 
                        </div>
                        <div class="mt-4">
                            <span class="text-teal-600 text-md font-semibold">4/5 ratings </span>
                            <span class="text-sm text-gray-600">(based on 234 ratings)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach --}}
</div>
@endsection
