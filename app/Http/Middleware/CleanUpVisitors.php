<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Visitor;


class CleanUpVisitors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */public function handle($request, Closure $next)
    {
        // Remove old visitors
        Visitor::where('visited_at', '<', now()->subMinutes(5))->delete();

        return $next($request);
    }
}
