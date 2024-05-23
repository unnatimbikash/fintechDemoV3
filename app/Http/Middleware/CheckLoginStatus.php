<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\LoginModel;
use Illuminate\Support\Facades\Session;

class CheckLoginStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Retrieve user ID from the session
        $user = Session::get('userid');

        if ($user) {
            // Check the login status of the user
            $loginModel = LoginModel::where('user_id', $user)->first();

            if ($loginModel && $loginModel->status === 'active') {
                return $next($request);
            } else {
                // If the status is not active, forget the user_id session key
                Session::forget('userid');
            }
        }

        // Redirect to login with an error message
        return redirect()->route('login')->withErrors(['error' => 'Your login status is invalid.']);
    }
}
