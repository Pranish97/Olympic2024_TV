<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Link;
use App\Models\Player;

class SwimmingController extends Controller
{
    public function swimming()
    {
        $links = Link::where('game', 'swimming')
            ->orderByRaw("live = 'Yes' DESC, created_at DESC")
            ->get();
        $players = Player::where('game', 'swimming')->get();

        return view('race', compact('links', 'players'));
    }
}
