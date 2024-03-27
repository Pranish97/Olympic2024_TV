<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Link;
use App\Models\Player;

class FootballController extends Controller
{
    public function football()
    {
        $links = Link::where('game', 'football')
            ->orderByRaw("live = 'Yes' DESC, created_at DESC")
            ->get();
        $players = Player::where('game', 'football')->get();

        return view('football', compact('links', 'players'));
    }
}
