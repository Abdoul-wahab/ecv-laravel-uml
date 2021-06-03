@extends('layouts.app')

@section('content')

    <div class="bg-white shadow-md font-sans min-h-screen antialiased pt-24 pb-5">
        <div class="flex flex-col justify-center sm:w-96 sm:m-auto space-y-8">
            <div class="flex flex-col bg-white p-10 rounded-lg shadow space-y-6">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="-mx-3 md:flex mb-6">
                        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                            <input name="first_name" id="first-name" type="text" value="{{ old('first_name') }}"
                                class="border-2 rounded px-3 py-2 w-full hover:border-purple-400 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent focus:shadow @error('first_name') border-red-500 @enderror"
                                required placeholder="{{ __('First Name') }}">
                            @error('first_name')
                                <span class="text-red-500 text-xs" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="md:w-1/2 px-3">
                            <input name="last_name" id="last_name" type="text" value="{{ old('last_name') }}"
                                class="border-2 rounded px-3 py-2 w-full hover:border-purple-400 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent focus:shadow @error('last_name') border-red-500 @enderror"
                                required placeholder="{{ __('Last Name') }}">
                            @error('last_name')
                                <span class="text-red-500 text-xs" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="-mx-3 md:flex mb-6">
                        <div class="md:w-full px-3">
                            <input name="email" id="email" type="email" value="{{ old('email') }}"
                                class="border-2 rounded px-3 py-2 w-full hover:border-purple-400 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent focus:shadow @error('email') border-red-500 @enderror"
                                required placeholder="{{ __('Email') }}">
                            @error('email')
                                <span class="text-red-500 text-xs" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div cclass="-mx-3 md:flex mb-6">
                        <span class="text-gray-500">Type de compte</span>
                        <div class="mt-2 mb-6">
                          <label class="inline-flex items-center">
                            <input type="radio" class="form-radio" name="account_type" value="personel">
                            <span class="ml-2 text-gray-500">Personel</span>
                          </label>
                          <label class="inline-flex items-center ml-6">
                            <input type="radio" class="form-radio" name="account_type" value="business">
                            <span class="ml-2 text-gray-500">Entreprise</span>
                          </label>
                          @error('account_type')
                                <span class="text-red-500 text-xs" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="-mx-3 md:flex mb-6">
                        <div class="md:w-full px-3">
                            <input name="password" id="password" type="password"
                                class="border-2 rounded px-3 py-2 w-full hover:border-purple-400 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent focus:shadow @error('password') border-red-500 @enderror"
                                autocomplete="new-password" required placeholder="{{ __('Password') }}">
                            @error('password')
                                <span class="text-red-500 text-xs" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="-mx-3 md:flex mb-6">
                        <div class="md:w-full px-3">
                            <input name="password_confirmation" id="password_confirmation" type="password"
                                class="border-2 rounded px-3 py-2 w-full hover:border-purple-400 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent focus:shadow @error('password_confirmation') border-red-500 @enderror"
                                autocomplete="new-password" required placeholder="{{ __('Confirm Password') }}">
                            @error('password_confirmation')
                                <span class="text-red-500 text-xs" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="flex flex-col-reverse sm:flex-row sm:justify-between items-center">
                        <a href="{{ route('login') }}"
                            class="inline-block text-purple-600 hover:text-purple-700 hover:underline">
                            {{ __('Déjà un compte ?') }}
                        </a>
                        <button type="submit"
                            class="bg-purple-600 text-white font-bold px-5 py-2 rounded focus:outline-none shadow hover:bg-purple-800 focus:ring-2 focus:ring-purple-600 focus:ring-opacity-50 transition-colors">
                            {{ __('Créer un compte') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
