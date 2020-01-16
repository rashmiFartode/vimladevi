<?php

namespace App\Http\Middleware;

use Closure;
use App\User;

class VerifyUserCount
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
        $users = User::all()->count();
        if ($users >= 10) {
            session()->flash('warning', "Denied! User can't be more than 10");
            return redirect()->back();
        }
        return $next($request);
    }
}
