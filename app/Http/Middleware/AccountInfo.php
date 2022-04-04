<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AccountInfo
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next){
        
        $user = Auth::user();

        if( $user && $request->path() !== 'profile'  &&  ( $user->address == NULL || $user->contact_person == NULL || $user->contact_phone == NULL || $user->contact_email == NULL || $user->cert == NULL || $user->manpower == NULL ))
        {   
             return redirect('/profile');
        } 

           return  $next($request);
    }

}