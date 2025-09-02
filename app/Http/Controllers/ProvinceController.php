<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Province;

class ProvinceController extends Controller
{
    public function index()
    {
        $provinces = Province::all(); // Get all provinces from the database

        // Load the view and pass the provinces data to it
        return view('provinces.index', ['provinces' => $provinces]);
    }


    public function show(Province $province)
    {
        // Laravel's Route Model Binding automatically finds the Province from the ID in the URL.
        // We don't need to write: $province = Province::findOrFail($id);
        // It's magic!

        return view('provinces.show', ['province' => $province]);
    }
}
