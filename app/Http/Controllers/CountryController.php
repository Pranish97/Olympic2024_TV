<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function create()
    {
        return view('country');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->extension();

        $request->image->move(public_path('images/countries'), $imageName);

        Country::create([
            'name' => $request->name,
            'image' => $imageName,
        ]);

        return redirect()->route('dashboard')->with('success', 'Country added successfully!');
    }
}
