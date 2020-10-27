<?php

use Pantheion\Engine\Application;
use Pantheion\Session\Session;

if (!function_exists('session')) {
    function session()
    {
        return app(Session::class);
    }
}

if (!function_exists('flash')) {
    function flash(string $key, $value = null)
    {
        return session()->flash($key, $value);
    }
}

if (!function_exists('old')) {
    function old(string $key, $value = null)
    {
        return session()->old($key, $value);
    }
}
