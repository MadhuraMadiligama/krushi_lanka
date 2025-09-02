<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Crop;
use App\Models\Province;

class CropSeeder extends Seeder
{
    public function run(): void
    {
        // --- 1. සහල් (Rice) ---
        $rice = Crop::create([
            'name_si' => 'සහල්',
            'name_en' => 'Rice',
            'description_si' => 'ශ්‍රී ලංකාවේ ප්‍රධාන ආහාරය වේ.',
            'season' => 'Maha & Yala'
        ]);
        // සහල් සියලුම පළාත් වලට සම්බන්ධ කිරීම
        $allProvinces = Province::all();
        $rice->provinces()->attach($allProvinces);


        // --- 2. තේ (Tea) ---
        $tea = Crop::create([
            'name_si' => 'තේ',
            'name_en' => 'Tea',
            'description_si' => 'ශ්‍රී ලංකාවේ ප්‍රධාන අපනයන භෝගයකි.',
            'season' => 'All Year'
        ]);
        // තේ මධ්‍යම සහ ඌව පළාත් වලට පමණක් සම්බන්ධ කිරීම
        $teaProvinces = Province::whereIn('name_en', ['Central Province', 'Uva Province'])->get();
        $tea->provinces()->attach($teaProvinces);


        // --- 3. කුරුඳු (Cinnamon) ---
        $cinnamon = Crop::create([
            'name_si' => 'කුරුඳු',
            'name_en' => 'Cinnamon',
            'description_si' => 'දකුණු සහ බස්නාහිර පළාත්වලට විශේෂිත වූ අපනයන භෝගයකි.',
            'season' => 'All Year'
        ]);
        // කුරුඳු දකුණු සහ බස්නාහිර පළාත් වලට සම්බන්ධ කිරීම
        $cinnamonProvinces = Province::whereIn('name_en', ['Southern Province', 'Western Province'])->get();
        $cinnamon->provinces()->attach($cinnamonProvinces);
    }
}
