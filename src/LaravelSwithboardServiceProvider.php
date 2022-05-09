<?php

namespace Marzvrover\LaravelSwitchboard;

if (! \Composer\InstalledVersions::isInstalled('Illuminate\Support') ) {
    throw new \Exception("Must install Illuminate\Support for laravel support");
}

use Illuminate\Support\ServiceProvider;

class LaravelSwithboardServiceProvider extends ServiceProvider {

}
