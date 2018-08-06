<?php

namespace App\Http\Middleware;

use Closure;
use function config;
use function dd;
use function in_array;

class Language
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
        $lang = $request->segment(1);
        
        if ($lang == null || !in_array($lang, config('translatable.locales')))
        {
            $segments = $request->segments();
    
            $lang = config('app.locale');
            $segments = array_prepend($segments, $lang);
            
            return redirect()->to(implode('/', $segments));
        }
    
        return $next($request);
    }
}
