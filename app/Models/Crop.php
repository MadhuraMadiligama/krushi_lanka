<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crop extends Model
{
    use HasFactory;

    // Mass assignment සඳහා allow කරන fields
    protected $fillable = [
        'name_si',
        'name_en',
        'season',
        'description_si',
    ];

    // Relationships
    public function provinces()
    {
        return $this->belongsToMany(Province::class);
    }
}
