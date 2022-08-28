<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    public function handle($request, Closure $next, ...$guards)
    {
        $user_id = $request->session()->get('id');

        if (!$user_id) {
            return redirect('login');
        }

        $user = User::where('id', $user_id)->first();

        if (!$user_id) {
            return redirect('login');
        }

        return $next($request);
    }
}
