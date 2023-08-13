<?php

namespace Incevio\Package\Stub;

use Illuminate\Support\Facades\Facade;

class StubFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'stub';
    }
}
