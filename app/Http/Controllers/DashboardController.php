<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
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
            'description' => 'required|string|max:255',
            'total_medal' => 'required|string|max:255',
            'gold_medal' => 'required|string|max:255',
            'silver_medal' => 'required|string|max:255',
            'bronze_medal' => 'required|string|max:255',

        ]);

        $imageName = time() . '.' . $request->image->extension();

        $request->image->move(public_path('images/countries'), $imageName);

        Country::create([
            'name' => $request->name,
            'image' => $imageName,
            'description' => $request->description,
            'total_medal' => $request->total_medal,
            'gold_medal' => $request->gold_medal,
            'silver_medal' => $request->silver_medal,
            'bronze_medal' => $request->bronze_medal,
        ]);

        return redirect()->route('dashboard')->with('success', 'Country added successfully!');
    }

    public function link()
    {
        return view('link');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login')->with('logout', 'User Logout successfully!');
    }

    public function redirectToCountry($countryId)
    {
        $country = Country::find($countryId);

        if ($country) {
            return view('countryView', compact('country'));
        }

        return redirect('/dashboard');
    }
}
