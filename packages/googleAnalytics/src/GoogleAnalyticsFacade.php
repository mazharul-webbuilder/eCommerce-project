<?php

namespace Incevio\Package\GoogleAnalytics;

use Illuminate\Support\Facades\Facade;

class GoogleAnalyticsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'googleAnalytics';
    }
}
