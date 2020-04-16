<?php

namespace App\Http\Middleware;

use Closure;

class SetLanguage
{
    
    	public function handle($request, Closure $next) {
    		\App::setLocale($request->locale);
    		return $next($request);
    	}
}
