<?php

namespace Incevio\Package\Subscription;

class Uninstaller
{
    public $package;

    public function __construct()
    {
        $this->package = 'Subscription';
    }

    public function cleanDatabase()
    {
        return true;
    }
}
