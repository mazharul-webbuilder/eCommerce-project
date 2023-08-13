<?php

namespace Incevio\Package\AppleLogin;

class Uninstaller
{
    public $package;

    public function __construct()
    {
        $this->package = 'appleLogin';
    }

    public function cleanDatabase()
    {
        return true;
    }
}
