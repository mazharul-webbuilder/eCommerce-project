<?php

namespace Incevio\Package\MPesa;

use Illuminate\Support\Facades\Facade;

class MPesaFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'MPesa';
    }
}
