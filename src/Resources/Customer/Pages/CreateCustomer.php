<?php

namespace JeffersonGoncalves\FilamentCommerce\Customer\Resources\Customer\Pages;

use Filament\Resources\Pages\CreateRecord;
use JeffersonGoncalves\FilamentCommerce\Customer\Resources\Customer\CustomerResource;

class CreateCustomer extends CreateRecord
{
    protected static string $resource = CustomerResource::class;
}
