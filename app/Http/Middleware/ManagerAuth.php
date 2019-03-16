<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use App\Models\User;
use Closure;

class ManagerAuth {
    /**
     *  return NEXT
     */
    public function handle($request, Closure $next) {

        $data['login'] = unserialize( base64_decode( session('login') ) );
        if(!$data['login']){
            return redirect('login')->with('error', 'teste');
        }
        $usuario = User::where('name', $request->get('username'))->where('password', base64_encode($request->get('password')))->first();
        
        return $next($request);
    }
}
