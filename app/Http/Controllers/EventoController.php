<?php

namespace App\Http\Controllers;

use App\Evento;
use App\User;
use App\Subscription;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventoController extends Controller
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

        return view('home',compact('eventos'));

        //return view('home');
    }

    public function inscrever(Request $request)
    {
        $inscricao = new Subscription();
        $inscricao->evento_id = $request->id;
        $inscricao->user_id = auth()->user()->id;
        $inscricao->save();
        return 'ok';
    }
   
    public function meusEventos(Request $request)
    {
        $meusEv = auth()->user()->id;
        $usuario = User::find($meusEv);
        return 'ok';
    }
}