<?php

namespace App\Http\Middleware;

use App\User;
use Closure;
use Illuminate\Support\Facades\Auth;

class ManageMiddleware
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
        if (!User::whereRoleIs(['superadmin', 'admin'])){
            return redirect()->route('index')->with('error', 'You don not access to this page!');
        }
        return $next($request);
    }
}
