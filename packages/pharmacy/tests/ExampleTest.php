<?php

namespace Incevio\Package\Pharmacy\Tests;

use Orchestra\Testbench\TestCase;
use Incevio\Package\Pharmacy\PharmacyServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [PharmacyServiceProvider::class];
    }

    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
