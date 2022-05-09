<?php

namespace Marzvrover\LaravelSwitchboard\Tests;

use Marzvrover\LaravelSwitchboard\LaravelSwithboardServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

abstract class TestCase extends OrchestraTestCase
{
    protected function getEnvironmentSetUp($app)
    {

    }

    protected function getPackageProviders($app)
    {
        return [LaravelSwithboardServiceProvider::class];
    }
}
