<?php

namespace App\Http\Middleware;

use Closure;

class Vendor
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
        if($request->user()->role == 'vendor'){
            return $next($request);
        }else{
            $request->session()->flash('status','You donnot have previlage to access this system.');
            return redirect()->route($request->user()->role);
        }

    }
}
