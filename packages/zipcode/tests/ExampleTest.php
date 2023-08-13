<?php

namespace Incevio\Package\Zipcode\Tests;

use Incevio\Package\Zipcode\Http\Controllers\ZipcodeController;
use Orchestra\Testbench\TestCase;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [ZipcodeController::class];
    }

    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
