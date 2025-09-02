<x-app-layout>
    {{-- Page Header with dynamic province name --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $province->name_si }}
        </h2>
    </x-slot>

    {{-- Page Content --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <h3 class="text-2xl font-bold mb-4">වගා කළ හැකි භෝග</h3>

                    @if ($province->crops->count() > 0)
                        <ul class="space-y-3">
                            @foreach ($province->crops as $crop)
                                <li class="p-4 bg-gray-50 dark:bg-gray-700 rounded-md">
                                    <p class="font-semibold text-lg text-gray-800 dark:text-white">{{ $crop->name_si }}</p>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">කන්නය: {{ $crop->season }}</p>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <p>මෙම පළාත සඳහා දැනට භෝග ඇතුළත් කර නොමැත.</p>
                    @endif

                    <div class="mt-8">
                        <a href="/provinces" class="text-indigo-600 dark:text-indigo-400 hover:text-indigo-900 dark:hover:text-indigo-200">
                            ← සියලුම පළාත් වෙත ආපසු යන්න
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>