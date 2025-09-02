<x-app-layout>
    {{-- Page Header --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('ශ්‍රී ලංකාවේ පළාත්') }}
        </h2>
    </x-slot>

    {{-- Page Content --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        {{-- Loop through each province and create a card --}}
                        @foreach ($provinces as $province)
                            <a href="/provinces/{{ $province->id }}" class="block p-6 bg-gray-50 dark:bg-gray-700 rounded-lg shadow-md hover:shadow-xl hover:scale-105 transition-all duration-300">
                                <h3 class="text-xl font-semibold text-gray-800 dark:text-white">{{ $province->name_si }}</h3>
                                <p class="text-gray-500 dark:text-gray-400 mt-1">{{ $province->name_en }}</p>
                            </a>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>