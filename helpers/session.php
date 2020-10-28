<?php

use Pantheion\Engine\Application;
use Pantheion\Session\Session;

if (!function_exists('session')) {
    /**
     * Returns the Session
     *
     * @return Session
     */
    function session()
    {
        return app(Session::class);
    }
}

if (!function_exists('old')) {
    /**
     * Returns values from the old input
     *
     * @param string $key
     * @param $default
     * @return mixed
     */
    function old(string $key, $default = null)
    {
        return session()->getOldInput($key, $default);
    }
}
