@extends('layouts.app')

@section('content')
    <div class="font-sans min-h-screen antialiased pt-24 pb-5">
        <div class="flex flex-col justify-center sm:w-96 sm:m-auto space-y-8">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="flex flex-col bg-white p-10 rounded-lg shadow space-y-6">
                    <h1 class="font-bold text-gray-500 text-xl text-center">Sign in to your account</h1>

                    @error('email')
                        <div class="flex items-center py-1">
                            <div class=" rounded-full p-1 fill-current bg-red-200 text-red-700">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    {{-- <path stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"/> --}}
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />

                                </svg>
                            </div>
                            <span class="font-medium text-sm ml-3 text-red-700">
                                {{ $message }}
                            </span>
                        </div>
                    @enderror


                    <div class="flex flex-col space-y-1">
                        <input name="email" type="email" id="email"
                            class="border-2 hover:border-purple-400 rounded px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent focus:shadow"
                            value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="email" />
                    </div>

                    <div class="flex flex-col space-y-1">
                        <input name="password" type="password" id="password"
                            class="border-2 hover:border-purple-400 rounded px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent focus:shadow"
                            required autocomplete="current-password" placeholder="Password" />
                    </div>

                    <div class="relative">
                        @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}"
                            class="inline-block text-purple-600 hover:text-purple-700 hover:underline">
                            {{ __('Forgot Your Password?') }}
                        </a>
                        @endif
                    </div>

                    <div class="flex flex-col-reverse sm:flex-row sm:justify-between items-center">
                        <a href="{{ route('register') }}"
                            class="inline-block text-purple-600 hover:text-purple-700 hover:underline">
                            {{ __('Pas de compte ?' ) }}
                        </a>
                        <button type="submit"
                            class="bg-purple-600 text-white font-bold px-5 py-2 rounded focus:outline-none shadow hover:bg-purple-800 focus:ring-2 focus:ring-purple-600 focus:ring-opacity-50 transition-colors">
                            {{ __('Se connecter') }}
                        </button>
                    </div>
                </div>
            </form>
            {{-- <div class="flex justify-center text-gray-500 text-sm">
            <p>&copy;2021. All right reserved.</p>
        </div> --}}
        </div>
    </div>
@endsection


{{-- circuit_langue : (id_circuit_langue, id_circuit, langue, titre) circuit : (id_circuit, distance) --}}