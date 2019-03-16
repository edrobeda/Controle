<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class SiteController extends Controller
{
    public function getIndex(){
        return view('welcome');
    }

    public function getLogin(Request $request){
        return view('login');
    }

    public function getLogout(){
        session()->flush();
        return redirect('/')->with('logout');
    }

    public function postLogin(Request $request){
        $usuario = User::where('name', $request->get('username'))->where('password', base64_encode($request->get('password')))->first();

        if($usuario === null){
            return redirect('/login')->with('error', 'Falha no login');
        }
        
        session(['login' => base64_encode( serialize( json_encode( $usuario ) ) ) ]);
        return redirect('/manager');

    }
}

