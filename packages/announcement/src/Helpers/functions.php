<?php


use Illuminate\Support\Facades\Cache;
use Incevio\Package\Announcement\Models\Announcement;

if (!function_exists('get_global_announcement')) {
    function get_global_announcement()
    {
        return Cache::rememberForever('global_announcement', function () {
            return Announcement::orderBy('created_at', 'desc')->first();
        });
    }
}