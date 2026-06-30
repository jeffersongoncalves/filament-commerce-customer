<?php

namespace JeffersonGoncalves\FilamentCommerce\Customer;

use Filament\Contracts\Plugin;
use Filament\Panel;
use JeffersonGoncalves\FilamentCommerce\Customer\Concerns\HasCommerceCustomerPluginConfig;
use JeffersonGoncalves\FilamentCommerce\Customer\Resources\Customer\CustomerResource;

class CommerceCustomerPlugin implements Plugin
{
    use HasCommerceCustomerPluginConfig;

    public function getId(): string
    {
        return 'filament-commerce-customer';
    }

    public function register(Panel $panel): void
    {
        $panel->resources($this->resolveResources([
            'customer' => CustomerResource::class,
        ]));

        $panel->widgets($this->resolveWidgets());
    }

    public function boot(Panel $panel): void
    {
        //
    }
}
