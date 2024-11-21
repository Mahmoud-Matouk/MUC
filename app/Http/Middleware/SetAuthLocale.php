<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Symfony\Component\HttpFoundation\Response;

class SetAuthLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $locale = app()->getLocale();

        if (auth()->check()) {
            $locale = auth()->user()->locale;
        }

        if (in_array(needle: $locale, haystack: config(key: 'app.locales'), strict: true)) {
            app()->setLocale(locale: $locale);

            Carbon::setLocale(locale: $locale);
        }

        return $next($request);
    }
}
