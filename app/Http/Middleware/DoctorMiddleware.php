<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class DoctorMiddleware
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
        if(Auth::guard('doctor')->check()){
            return $next($request);

        }else{
           return redirect()->route('doctor.login');
        }
       
    }
}
