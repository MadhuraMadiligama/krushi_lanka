<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Province;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Province::create(['name_si' => 'බස්නාහිර පළාත', 'name_en' => 'Western Province']);
        Province::create(['name_si' => 'මධ්‍යම පළාත', 'name_en' => 'Central Province']);
        Province::create(['name_si' => 'දකුණු පළාත', 'name_en' => 'Southern Province']);
        Province::create(['name_si' => 'උතුරු පළාත', 'name_en' => 'Northern Province']);
        Province::create(['name_si' => 'නැගෙනහිර පළාත', 'name_en' => 'Eastern Province']);
        Province::create(['name_si' => 'වයඹ පළාත', 'name_en' => 'North Western Province']);
        Province::create(['name_si' => 'උතුරු මැද පළාත', 'name_en' => 'North Central Province']);
        Province::create(['name_si' => 'ඌව පළාත', 'name_en' => 'Uva Province']);
        Province::create(['name_si' => 'සබරගමුව පළාත', 'name_en' => 'Sabaragamuwa Province']);
    }
}
