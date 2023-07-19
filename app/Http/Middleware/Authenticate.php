<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        return $request->expectsJson() ? null : route('login');
    }

    public function handle($request, Closure $next, ...$guards)
    {
        if ($weather_jwt = $request->cookie(key: 'weather_jwt')) {
            $request->headers->set('Authorization', 'Bearer ' . $weather_jwt);
        }

        $this->authenticate($request, $guards);

        return $next($request);
    }
}