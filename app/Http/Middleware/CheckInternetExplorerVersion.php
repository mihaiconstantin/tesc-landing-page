<?php

namespace App\Http\Middleware;

use Closure;
use App\Helpers\BrowserCheck;

class CheckInternetExplorerVersion
{
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  \Closure $next
	 * @param $version
	 * @return mixed
	 */
    public function handle($request, Closure $next, $version)
    {
    	// TODO: Come on, this isn't testable. Refactor this...
    	$browserCheck = new BrowserCheck(new \Browser);

    	if ($browserCheck->isInternetExplorer() && !$browserCheck->isSupportedInternetExplorerVersion((int) $version)) {
			return response(view('unsupported')->with('version', $version));
		}

        return $next($request);
    }
}
