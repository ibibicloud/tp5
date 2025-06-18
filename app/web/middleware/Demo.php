<?php

namespace app\web\middleware;

class Demo
{
    public function handle($request, \Closure $next)
    {
        // dump($request);
        return $next($request);
    }
}