<?php

namespace App\Http\Middleware;
use App\Providers\RouteServiceProvider;


use Closure;
use Illuminate\Http\Request;

class VerifierUtilisateurRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next , string $role)
    {
        if($request->user()->role === $role) {
            return $next($request);
        } 
        else{
            //si non pas d'autorisation
            return redirect(RouteServiceProvider::HOME);
        }
        
    }
}
