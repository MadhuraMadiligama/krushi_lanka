<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Crop;
use App\Models\Province;

class CropController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $crops = Crop::latest()->paginate(10); // Get latest crops, 10 per page
        return view('admin.crops.index', ['crops' => $crops]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $provinces = Province::all(); // Get all provinces from the database
        return view('admin.crops.create', ['provinces' => $provinces]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 1. Validate the incoming data
        $validated = $request->validate([
            'name_si' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'season' => 'required|string',
            'description_si' => 'nullable|string',
            'provinces' => 'nullable|array', // Validate that provinces is an array
            'provinces.*' => 'exists:provinces,id' // Validate each province ID exists
        ]);

        // 2. Create a new Crop but don't save provinces yet
        $crop = Crop::create([
            'name_si' => $validated['name_si'],
            'name_en' => $validated['name_en'],
            'season' => $validated['season'],
            'description_si' => $validated['description_si'],
        ]);

        // 3. Attach the selected provinces to the new crop
        if ($request->has('provinces')) {
            $crop->provinces()->attach($request->provinces);
        }

        // 4. Redirect back with a success message
        return redirect()->route('admin.dashboard')->with('success', 'භෝගය සහ පළාත් සම්බන්ධ කිරීම සාර්ථකයි!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
