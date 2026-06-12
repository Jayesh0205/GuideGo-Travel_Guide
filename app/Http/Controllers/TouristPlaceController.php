<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TouristPlace;

class TouristPlaceController extends Controller
{
    public function store(Request $request)
{
    $imagePath = null;

    if ($request->hasFile('image')) {

        $imagePath = $request->file('image')
                             ->store('places', 'public');
    }

    TouristPlace::create([
        'name' => $request->name,
        'district' => $request->district,
        'description' => $request->description,
        'image' => $imagePath
    ]);

    return redirect('/admin/places')
           ->with('success', 'Place Added');
}
    public function index()
    {
        $places = TouristPlace::all();

        return view('admin.places.index', compact('places'));
    }

    public function edit($id)
    {
        $place = TouristPlace::find($id);
        return view('admin.places.edit', compact('place'));
    }

    public function update(Request $request, $id)
    {
        $place = TouristPlace::find($id);

        $place->name = $request->name;
        $place->image = $request->image;
        $place->district = $request->district;
        // add other fields here as needed

        $place->save();

        return redirect()->route('admin.places.index')->with('success', 'Place updated successfully');
    }

    public function destroy($id)
    {
        $place = TouristPlace::find($id);
        $place->delete();

        return redirect()->route('admin.places.index')->with('success', 'Place deleted successfully');
    }


}