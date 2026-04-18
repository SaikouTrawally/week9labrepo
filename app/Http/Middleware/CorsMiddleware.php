<?php

namespace App\Http\Middleware;

class CorsMiddleware
{
    public function handle($request, \Closure $next)
    {
        // Handle preflight OPTIONS request
        if ($request->isMethod('OPTIONS')) {
            $response = response('', 200);
        } else {
            $response = $next($request);
        }

        // Add headers
        return $response->header('Access-Control-Allow-Methods', 'HEAD, GET, POST, PUT, PATCH, DELETE')
                        ->header('Access-Control-Allow-Headers', $request->header('Access-Control-Request-Headers'))
                        ->header('Access-Control-Allow-Origin', '*');
    }
}