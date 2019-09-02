<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class AtualizarController extends Controller
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
    public function buscar()
    {
        $user_id = auth()->user()->id; 

        $buscar = User::find($user_id);
        return view('atualizar',compact('buscar'));
    }

     public function atualizar(Request $request)
    {
        $user_id = auth()->user()->id; 
        $usuario = User::find($user_id);
        $usuario->update([
            'name' => $request->name,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'senha' => Hash::make($request->senha)
        ]);

        //$atualizar = User::find($id);
        //return view('atualizar',compact('atualizar'))->withInput(Request::all());
        return redirect('index');
    }
}