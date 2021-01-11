<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class VerifyAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (session()->get("user")){
            $user = User::where("id", "=", session()->get("user")["id"])->first();
            if ($user->isAdmin == 0) {
                abort(403, "You dont have access to this!");
            }
        }
        else{
            abort(403, "You dont have access to this!");
        }
        return $next($request);
    }
}
