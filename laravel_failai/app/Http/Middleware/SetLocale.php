<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure(Request): (Response|RedirectResponse) $next
     * @return Response|RedirectResponse
     */
    public function handle(Request $request, Closure $next): Response|RedirectResponse
    {
        app()->setFallbackLocale('en');
        $locale = $request->session()->get('lang', config('app.locale'));
        if ($request->has('lang')) {
            $locale = $request->get('lang');
            $request->session()->put('lang', $locale);
        }
        app()->setLocale($locale);
        return $next($request);
    }
}
