<?php namespace Bantenprov\LaravelOpd\Http\Middleware;

use Closure;

/**
 * The LaravelOpdMiddleware class.
 *
 * @package Bantenprov\LaravelOpd
 * @author  bantenprov <developer.banten@gmail.com>
 */
class LaravelOpdMiddleware
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        return $next($request);
    }
}
