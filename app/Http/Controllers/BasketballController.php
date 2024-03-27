<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Link;
use App\Models\Player;

class BasketballController extends Controller
{
    public function basketball()
    {
        $links = Link::where('game', 'basketball')
            ->orderByRaw("live = 'Yes' DESC, created_at DESC")
            ->get();
        $players = Player::where('game', 'basketball')->get();

        return view('basketball', compact('links', 'players'));
    }
}
