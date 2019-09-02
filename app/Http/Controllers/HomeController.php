<?php

namespace App\Http\Controllers;

use App\Evento;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $eventos = Evento::all();

        return view('home',compact('eventos'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

        //return view('home');
    }
}
