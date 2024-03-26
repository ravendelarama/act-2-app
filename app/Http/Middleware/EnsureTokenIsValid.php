<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureTokenIsValid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $accessToken = $request->bearerToken();

        if (!$accessToken) {
            return response([
                'error' => 'Unauthorized'
            ], 401);
        }

        if ($accessToken !== env('ACCESS_TOKEN')) {
            return response([
                'error' => 'Forbidden'
            ], 403);
        }

        return $next($request);
    }
}
