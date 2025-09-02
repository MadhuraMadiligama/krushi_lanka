<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    {{-- සාර්ථක පණිවිඩ පෙන්වීමට --}}
                    @if (session('success'))
                        <div class="mb-4 p-4 bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 border border-green-300 dark:border-green-700 rounded-md">
                            {{ session('success') }}
                        </div>
                    @endif

                    <p class="mb-6">{{ __("Welcome, Admin! You are logged in to the Admin Panel.") }}</p>

                    {{-- නව භෝගයක් ඇතුළත් කිරීමට අදාළ Button එක --}}
                    <a href="{{ route('crops.create') }}" class="inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-700 active:bg-green-900 focus:outline-none focus:border-green-900 focus:ring ring-green-300 disabled:opacity-25 transition ease-in-out duration-150">
                        + නව භෝගයක් ඇතුළත් කරන්න
                    </a>
<a href="{{ route('crops.index') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700">
    භෝග කළමනාකරණය කරන්න
</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>