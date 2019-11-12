<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use App\Admin;

class IsAdmin
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
        $countAdminUser = Admin::where('user_id', Auth::id())->count();

        if($countAdminUser > 0) {
          return $next($request);
        }
        else {
          return redirect('/login');
        }
    }
}
