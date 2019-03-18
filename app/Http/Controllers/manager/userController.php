<?php

namespace App\Http\Controllers\manager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class userController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    public function getIndex(){
        $data['page'] = 'dashboard||user';
        $data['login'] = json_decode( unserialize( base64_decode( session('login') ) ) );
        
        $data['data'] = User::all();
        // dd($data['result']->toArray());
        return view('manager/user/index')->with($data);
    }


}
