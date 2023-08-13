<?php

namespace Incevio\Package\Zipcode;

use Illuminate\Support\Facades\Facade;

class ZipcodeFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'zipcode';
    }
}
