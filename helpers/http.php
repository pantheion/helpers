<?php

use Pantheion\Http\ViewResponse;
use Pantheion\Http\JsonResponse;
use Pantheion\Http\RedirectResponse;

if (!function_exists('view')) {
    function view(string $file, array $data = null)
    {
        // return new ViewResponse(View::render($file, $data));
    }
}

if (!function_exists('json')) {
    function json($data)
    {
        return new JsonResponse($data);
    }
}

if (!function_exists('redirect')) {
    function redirect($url)
    {
        return new RedirectResponse($url);
    }
}