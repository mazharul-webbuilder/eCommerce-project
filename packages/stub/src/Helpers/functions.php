<?php

/**
 * Here is an glober helper function. This fucntions will be registered autometically
 */
if (!function_exists('get_some_help_here')) {
    function get_some_help_here()
    {
        return trans('stub::lang.welcome');
    }
}
