<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Helpers\Helper;

class ManagerController extends Controller
{

    public function __construct(){    
    }

    public function getDashboard(Request $request){
        
        $data['page'] = 'dashboard';

        $data['login'] = json_decode( unserialize( base64_decode( session('login') ) ) );

        return view('manager/index')->with($data);
    }


    public function imageUploader(){
        $Helper = new Helper();
        $Helper->uploadImage('teste');
    }
    
}

