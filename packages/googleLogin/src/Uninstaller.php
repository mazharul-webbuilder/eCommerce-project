<?php

namespace Incevio\Package\GoogleLogin;

class Uninstaller
{
    public $package;

    public function __construct()
    {
        $this->package = 'googleLogin';
    }

    public function cleanDatabase()
    {
        return true;
    }
}
