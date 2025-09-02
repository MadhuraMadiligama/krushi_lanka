<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    // A province can have many crops
    public function crops()
    {
        return $this->belongsToMany(Crop::class);
    }
}
