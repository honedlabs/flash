<?php

declare(strict_types=1);

namespace Honed\Nav\Middleware;

use Closure;
use Illuminate\Http\Request;

class ShareNavigation
{
    /**
     * Handle the incoming request.
     *
     * @return \Closure
     */
    public function handle(Request $request, Closure $next)
    {
        return $next($request);
    }
}
