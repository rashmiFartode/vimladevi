<?php

namespace App\Http\Middleware;

use Closure;
use App\User;

class VerifyIsAdmin
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
        if (!auth()->user()->isAdmin()) {
            session()->flash('warning', "<strong>Denied!</strong>You are authorise pers");
            return redirect()->route('home');
        }

        return $next($request);
    }
}
