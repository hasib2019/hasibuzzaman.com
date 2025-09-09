<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class OptimizePerformance
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Add performance and caching headers
        if ($response instanceof \Illuminate\Http\Response) {
            $response->headers->set('Cache-Control', 'public, max-age=86400'); // 24 hours
            $response->headers->set('X-Content-Type-Options', 'nosniff');
            $response->headers->set('X-Frame-Options', 'DENY');
            $response->headers->set('X-XSS-Protection', '1; mode=block');
            $response->headers->set('Referrer-Policy', 'strict-origin-when-cross-origin');
            
            // Enable Gzip compression
            if (extension_loaded('zlib') && !ob_get_level()) {
                ob_start('ob_gzhandler');
            }
            
            // Minify HTML output
            if ($response->headers->get('Content-Type') === 'text/html; charset=UTF-8') {
                $content = $response->getContent();
                $content = $this->minifyHtml($content);
                $response->setContent($content);
            }
        }

        return $response;
    }

    /**
     * Minify HTML content
     */
    private function minifyHtml($html)
    {
        // Remove comments
        $html = preg_replace('/<!--(?!<!)[^\[>].*?-->/', '', $html);
        
        // Remove extra whitespace
        $html = preg_replace('/\s+/', ' ', $html);
        
        // Remove whitespace between tags
        $html = preg_replace('/>\s+</', '><', $html);
        
        return trim($html);
    }
}
