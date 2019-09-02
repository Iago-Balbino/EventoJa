<?php

namespace App\Http\Controllers;

use App\User;
use App\Subscription;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class IndexController extends Controller
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

        $principal = User:: where('id', '=', Auth::id())
        ->get();
        
        $inscricao = Subscription::all();

        return view('index',compact('principal', 'inscricao'));
    }
    
}
