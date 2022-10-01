<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

use Auth;

class Customer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        
        $role_id = Auth::user()->role_id;

        $status = Auth::user()->ban_status_on;
        
        if($role_id=='2' && $status=='0'){
        

            return $next($request);
        
        
        }else{            
            return redirect()->route('dashboard');
        
        }
    
    
    }

}






