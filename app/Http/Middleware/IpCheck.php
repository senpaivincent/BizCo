<?php

namespace App\Http\Middleware;

use Closure;

class IpCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $email)
    {
        //dd($email, $something);

        if($request->user()->email == $email){
            return $next($request);
        }
        return redirect('/');
    }
}
