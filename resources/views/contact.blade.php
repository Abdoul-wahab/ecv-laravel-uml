@extends('layouts.app')

@section('content')
    <div class="bg-white px-4 overflow-hidden sm:px-6 lg:px-8">
        <div class="relative max-w-xl mx-auto">
            <svg class="absolute left-full transform translate-x-1/2" width="404" height="404" fill="none"
                viewBox="0 0 404 404" aria-hidden="true">
                <defs>
                    <pattern id="85737c0e-0916-41d7-917f-596dc7edfa27" x="0" y="0" width="20" height="20"
                        patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"></rect>
                    </pattern>
                </defs>
                <rect width="404" height="404" fill="url(#85737c0e-0916-41d7-917f-596dc7edfa27)"></rect>
            </svg>
            <svg class="absolute right-full bottom-0 transform -translate-x-1/2" width="404" height="404" fill="none"
                viewBox="0 0 404 404" aria-hidden="true">
                <defs>
                    <pattern id="85737c0e-0916-41d7-917f-596dc7edfa27" x="0" y="0" width="20" height="20"
                        patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"></rect>
                    </pattern>
                </defs>
                <rect width="404" height="404" fill="url(#85737c0e-0916-41d7-917f-596dc7edfa27)"></rect>
            </svg>
            <div class="text-center">
                <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Contact sales
                </h2>
                <p class="mt-4 text-lg leading-6 text-gray-500">
                    Nullam risus blandit ac aliquam justo ipsum. Quam mauris volutpat massa dictumst amet. Sapien tortor
                    lacus arcu.
                </p>
            </div>
            <div class="mt-12">
                <form action="#" method="POST" class="grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
                    <div>
                        <label for="first_name" class="block text-sm font-medium text-gray-700">First name</label>
                        <div class="mt-1">
                            <input type="text" name="first_name" id="first_name" autocomplete="given-name"
                                class="border-2 py-3 px-4 block w-full shadow-sm border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent focus:shadow hover:border-purple-400">
                        </div>
                    </div>
                    <div>
                        <label for="last_name" class="block text-sm font-medium text-gray-700">Last name</label>
                        <div class="mt-1">
                            <input type="text" name="last_name" id="last_name" autocomplete="family-name"
                                class="border-2 py-3 px-4 block w-full shadow-sm border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent focus:shadow hover:border-purple-400">
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="object" class="block text-sm font-medium text-gray-700">Object</label>
                        <div class="mt-1">
                            <input type="text" name="object" id="object" autocomplete="organization"
                                class="border-2 py-3 px-4 block w-full shadow-sm border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent focus:shadow hover:border-purple-400">
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <div class="mt-1">
                            <input id="email" name="email" type="email" autocomplete="email"
                                class="border-2 py-3 px-4 block w-full shadow-sm border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent focus:shadow hover:border-purple-400">
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                        <div class="mt-1">
                            <textarea id="message" name="message" rows="4"
                                class="border-2 py-3 px-4 block w-full shadow-sm border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent focus:shadow hover:border-purple-400"></textarea>
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <button type="button"
                                    class="bg-gray-200 relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500"
                                    x-data="{ on: false }" aria-pressed="false" :aria-pressed="on.toString()"
                                    @click="on = !on" x-state:on="Enabled" x-state:off="Not Enabled"
                                    :class="{ 'bg-purple-600': on, 'bg-gray-200': !(on) }">
                                    <span class="sr-only">Agree to policies</span>
                                    <span aria-hidden="true"
                                        class="translate-x-0 inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200"
                                        x-state:on="Enabled" x-state:off="Not Enabled"
                                        :class="{ 'translate-x-5': on, 'translate-x-0': !(on) }"></span>
                                </button>
                            </div>
                            <div class="ml-3">
                                <p class="text-base text-gray-500">
                                    By selecting this, you agree to the
                                    <!-- space -->
                                    <a href="#" class="font-medium text-gray-700 underline">Privacy Policy</a>
                                    <!-- space -->
                                    and
                                    <!-- space -->
                                    <a href="#" class="font-medium text-gray-700 underline">Cookie Policy</a>.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <button type="submit"
                            class="w-full inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-purple-600 hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                            Let's talk
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
