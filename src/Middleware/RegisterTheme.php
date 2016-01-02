<?php
namespace Einice\Theme\Middleware;
use Closure;
use Theme;

class RegisterTheme
{

    public function handle($request, Closure $next)
    {
        Theme::init();
        return $next($request);
    }

}