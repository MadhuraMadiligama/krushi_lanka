<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('නව භෝගයක් ඇතුළත් කරන්න') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    <form method="POST" action="{{ route('crops.store') }}">
                        @csrf  <!-- CSRF Protection -->

                        <!-- Crop Name Sinhala -->
                        <div>
                            <label for="name_si" class="block font-medium text-sm text-gray-700 dark:text-gray-300">භෝගයේ සිංහල නම</label>
                            <input id="name_si" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 dark:bg-gray-700 dark:border-gray-600" type="text" name="name_si" required autofocus />
                        </div>

                        <!-- Crop Name English -->
                        <div class="mt-4">
                            <label for="name_en" class="block font-medium text-sm text-gray-700 dark:text-gray-300">භෝගයේ ඉංග්‍රීසි නම</label>
                            <input id="name_en" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 dark:bg-gray-700 dark:border-gray-600" type="text" name="name_en" required />
                        </div>

                        <!-- Season -->
                        <div class="mt-4">
                            <label for="season" class="block font-medium text-sm text-gray-700 dark:text-gray-300">කන්නය</label>
                            <select name="season" id="season" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 dark:bg-gray-700 dark:border-gray-600">
                                <option value="Maha & Yala">මහ සහ යල</option>
                                <option value="All Year">වර්ෂය පුරා</option>
                                <option value="Maha">මහ කන්නය පමණි</option>
                                <option value="Yala">යල කන්නය පමණි</option>
                            </select>
                        </div>
                        
                        <!-- Description -->
                         <div class="mt-4">
                            <label for="description_si" class="block font-medium text-sm text-gray-700 dark:text-gray-300">විස්තරය</label>
                            <textarea id="description_si" name="description_si" rows="4" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 dark:bg-gray-700 dark:border-gray-600"></textarea>
                        </div>


<!-- Provinces Selection -->
<div class="mt-4">
    <label for="provinces" class="block font-medium text-sm text-gray-700 dark:text-gray-300">අදාළ පළාත් තෝරන්න (Ctrl ඔබාගෙන කිහිපයක් තේරිය හැක)</label>
    <select name="provinces[]" id="provinces" multiple class="block mt-1 w-full rounded-md shadow-sm border-gray-300 dark:bg-gray-700 dark:border-gray-600">
        @foreach ($provinces as $province)
            <option value="{{ $province->id }}">{{ $province->name_si }}</option>
        @endforeach
    </select>
</div>


                        <div class="flex items-center justify-end mt-4">
                            <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">
                                භෝගය ඇතුළත් කරන්න
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>