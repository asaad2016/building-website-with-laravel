<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class isuseradmin
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
        if(Auth::check()){
            if(Auth::User()->admin !=1){
                return redirect('login');

            }
            else{
               return $next($request); 
            }
        }else{
            return redirect('login');
        }
        
    }
}
