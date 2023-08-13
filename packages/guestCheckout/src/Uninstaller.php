<?php

namespace Incevio\Package\GuestCheckout;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class Uninstaller
{
    public $package;

    public function __construct()
    {
        $this->package = 'GuestCheckout';
    }

    public function cleanDatabase()
    {

    }
}
