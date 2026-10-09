<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Symfony\Component\HttpFoundation\Response;

class ImageDimensions
{
    // Adds the intrinsic width/height to local <img> tags that lack them, so the browser reserves space
    // before the image loads (no layout shift). CSS width/height rules still win over the attributes.
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        if ($request->is('portal*') || $request->ajax() || $response->getStatusCode() !== 200
            || ! str_contains((string) $response->headers->get('Content-Type'), 'text/html')) {
            return $response;
        }

        $html = $response->getContent();
        if (! is_string($html) || $html === '') {
            return $response;
        }

        $html = preg_replace_callback('~<img\b[^>]*>~i', function ($m) {
            $tag = $m[0];
            if (preg_match('~\swidth\s*=~i', $tag) || preg_match('~\sheight\s*=~i', $tag)) {
                return $tag;
            }
            if (! preg_match('~\ssrc\s*=\s*"([^"]+)"~i', $tag, $s)) {
                return $tag;
            }
            $size = $this->dimensions($s[1]);
            if (! $size) {
                return $tag;
            }

            return preg_replace('~\s*/?>$~', ' width="' . $size[0] . '" height="' . $size[1] . '"$0', $tag, 1);
        }, $html);

        $response->setContent($html);

        return $response;
    }

    private function dimensions(string $src): ?array
    {
        $path = parse_url(html_entity_decode($src), PHP_URL_PATH);
        if (! $path || ! preg_match('~^/(assets|client)/~', $path) || preg_match('~\.svg$~i', $path)) {
            return null;
        }

        $file = public_path(ltrim(rawurldecode($path), '/'));
        if (! is_file($file)) {
            return null;
        }

        return Cache::remember('imgdim:' . $path . ':' . filemtime($file), 86400, function () use ($file) {
            $info = @getimagesize($file);

            return $info && $info[0] > 0 && $info[1] > 0 ? [$info[0], $info[1]] : null;
        });
    }
}
