<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Link;

class LiveController extends Controller
{
    public function live()
    {
        $links = Link::where('live', 'Yes')->get();

        return view('live', compact('links'));
    }
}
