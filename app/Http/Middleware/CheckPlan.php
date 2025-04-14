<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckPlan
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();

        // Si l'utilisateur n'a pas d'abonnement actif, on le redirige
        if (! $user || ! $user->subscribed('default')) {
            return redirect()->route('pricing')->with('error', 'You need an active subscription to access this page.');
        }

        return $next($request);
    }
}
