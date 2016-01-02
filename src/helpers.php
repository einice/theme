<?php

if (!function_exists('statics')) {
    function statics($path, $version, $secure)
    {
        return Theme::asset($path, $secure = null, $version = false);
    }
}