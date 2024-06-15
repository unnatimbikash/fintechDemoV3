<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AutoLogout
{
    public function handle($request, Closure $next)
    {
        $expireTime = config('session.lifetime'); // session.lifetime is in minutes, convert to seconds

        if (Auth::check()) {
            $lastActivity = session('lastActivityTime');
            if ($lastActivity && (time() - $lastActivity > $expireTime)) {
                Auth::logout();
                $request->session()->invalidate();
                return redirect()->route('login')->withErrors(['error' => 'Your login status is invalid.']);
            }
            session(['lastActivityTime' => time()]);
        }

        return $next($request);
    }
}
