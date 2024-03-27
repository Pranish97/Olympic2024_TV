<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Link;
use App\Models\Player;

class RaceController extends Controller
{
    public function race()
    {
        $links = Link::where('game', 'race')
            ->orderByRaw("live = 'Yes' DESC, created_at DESC")
            ->get();
        $players = Player::where('game', 'race')->get();

        return view('race', compact('links', 'players'));
    }
}
