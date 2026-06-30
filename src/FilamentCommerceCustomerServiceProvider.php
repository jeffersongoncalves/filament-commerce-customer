<?php

namespace JeffersonGoncalves\FilamentCommerce\Customer;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentCommerceCustomerServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-commerce-customer';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasConfigFile();
    }
}
