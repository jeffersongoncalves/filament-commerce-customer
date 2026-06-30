<?php

namespace JeffersonGoncalves\FilamentCommerce\Customer\Concerns;

use JeffersonGoncalves\FilamentCommerce\Core\Concerns\HasCommercePluginConfig;

trait HasCommerceCustomerPluginConfig
{
    use HasCommercePluginConfig;

    protected function getConfigKey(): string
    {
        return 'filament-commerce-customer';
    }

    protected function getDefaultNavigationGroup(): string
    {
        return 'Commerce — Sales';
    }
}
