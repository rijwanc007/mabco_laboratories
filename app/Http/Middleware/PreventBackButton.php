<?php

namespace App\Http\Middleware;

use Closure;

class PreventBackButton
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);
        return $response->header('Cache-Control','nocache,no-store,max-age=0,must-revalidate')
            ->header('Pragma','no-cache')
            ->header('Expires','Sat,01 Jan 1990 00:00:00 GMT');
    }
}
