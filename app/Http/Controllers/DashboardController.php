<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $countries = Country::all();

        return view('dashboard', compact('countries'));
    }

    public function country()
    {
        return view('country');
    }

    public function addCountry(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'path' => 'required|string|max:255',
        ]);

        $imageName = time() . '.' . $request->image->extension();

        $request->image->move(public_path('images/countries'), $imageName);

        Country::create([
            'name' => $request->name,
            'image' => $imageName,
            'path' => $request->path,
        ]);

        return redirect()->route('dashboard')->with('success', 'Country added successfully!');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login')->with('logout', 'User Logout successfully!');
    }
}
