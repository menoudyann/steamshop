<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $games = Game::latest()->take(5)->get();
       return view('home', compact('games'));
    }
}
