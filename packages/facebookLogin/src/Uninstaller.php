<?php

namespace Incevio\Package\FacebookLogin;

class Uninstaller
{
    public $package;

    public function __construct()
    {
        $this->package = 'facebookLogin';
    }

    public function cleanDatabase()
    {
        return true;
    }
}
