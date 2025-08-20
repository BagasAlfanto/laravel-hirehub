<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MinifyOutput
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        if ($response instanceof Response &&
            str_contains($response->headers->get('Content-Type', ''), 'text/html')) {

            $output = $response->getContent();

            $output = preg_replace('/<!--(?!\[if).*?-->/', '', $output);

            $output = preg_replace('/\s+/', ' ', $output);
            $output = preg_replace('/>\s+</', '><', $output);

            $response->setContent($output);
        }

        return $response;
    }
}
