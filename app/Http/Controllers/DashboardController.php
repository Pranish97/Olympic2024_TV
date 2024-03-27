<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Link;
use App\Models\News;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $countries = Country::all();
        $links = Link::orderByRaw("live = 'Yes' DESC, created_at DESC")->get();
        $schedules = Schedule::all();
        $news = News::all();

        return view('dashboard', compact('countries', 'links', 'schedules', 'news'));
    }



    public function data()
    {
        return view('data');
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
