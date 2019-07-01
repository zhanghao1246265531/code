<?php

namespace App\Http\Middleware;

use Closure;

class IsToken
{
    public function handle($request, Closure $next)
    {
        var_dump("全局中间件");die;

        return $next($request);
    }
}