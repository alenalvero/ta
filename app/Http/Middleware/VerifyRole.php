<?php

namespace App\Http\Middleware;

use Closure;

class VerifyRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        $roles = explode('|', $role);
        $allowed_role = array_search(auth()->user()->type, $roles);
        if ($allowed_role !== false) {
            return $next($request);
        } else {
            dd($role);
        }

        return redirect(url('check-user'));
    }
}
