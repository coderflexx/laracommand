<?php

namespace Coderflex\LaraCommand;

use Coderflex\LaraCommand\Console\{
    ModelMakeCommand
};
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaraCommandsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('lara-commands')
            ->hasCommands([
                ModelMakeCommand::class,
            ]);
    }
}
