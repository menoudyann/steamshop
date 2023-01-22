<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class LibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::find(Auth::user()->id);
        $games = $user->games;
        return view('games.library', compact('games'));
    }

    /**
     * Store a game resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Game $game)
    {
        $game = Game::find($request->game_id);
        $user = User::find(Auth::user()->id);
        if ($game->buy($user)) {
            return redirect()->route('library.index');
        } else {
            return redirect()->route('games.index')->with('status', "Oh no you're broke !");
        }
    }
}
