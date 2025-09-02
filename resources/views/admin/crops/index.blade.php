<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('භෝග කළමනාකරණය') }}
            </h2>
            <a href="{{ route('crops.create') }}" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">
                + නව භෝගයක් එක් කරන්න
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead class="bg-gray-50 dark:bg-gray-700">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">සිංහල නම</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ඉංග්‍රීසි නම</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">කන්නය</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ක්‍රියා</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                            @foreach ($crops as $crop)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $crop->name_si }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $crop->name_en }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $crop->season }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{-- We will add Edit and Delete buttons here later --}}
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-4">
                        {{ $crops->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>