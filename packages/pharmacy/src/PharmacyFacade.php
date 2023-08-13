<?php

namespace Incevio\Package\Pharmacy;

use Illuminate\Support\Facades\Facade;

class PharmacyFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'pharmacy';
    }
}
