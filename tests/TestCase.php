<?php

namespace Marzvrover\Switchboard\Tests;

use Marzvrover\Switchboard\SwitchboardServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

abstract class TestCase extends OrchestraTestCase
{
    protected function getEnvironmentSetUp($app)
    {

    }

    protected function getPackageProviders($app)
    {
        return [SwitchboardServiceProvider::class];
    }
}
