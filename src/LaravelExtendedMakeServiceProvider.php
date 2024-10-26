<?php

namespace Msamgan\LaravelExtendedMake;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Msamgan\LaravelExtendedMake\Commands\LaravelExtendedMakeCommand;

class LaravelExtendedMakeServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-extended-make')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_extended_make_table')
            ->hasCommand(LaravelExtendedMakeCommand::class);
    }
}