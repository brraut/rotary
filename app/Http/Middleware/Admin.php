<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = auth()->user();

        switch ($user->role) {
             case 'super-admin':
             return $next($request);
             break;

            case 'admin':
            return $next($request);
            break;
            
            default:
            Session::flash('error',"You do not have sufficient permission to this action");
            return redirect()->back();
        }
       
    }
}
