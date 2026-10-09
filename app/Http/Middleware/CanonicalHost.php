<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CanonicalHost
{
    // www.lunaray.id -> lunaray.id (301), so every page has exactly one indexable address.
    public function handle(Request $request, Closure $next)
    {
        $host = $request->getHost();
        $primary = config('seo.primary_host');

        if ($host !== $primary && in_array($host, config('seo.indexable_hosts'), true) && $request->isMethod('GET')) {
            return redirect()->to('https://' . $primary . $request->getRequestUri(), 301);
        }

        return $next($request);
    }
}
