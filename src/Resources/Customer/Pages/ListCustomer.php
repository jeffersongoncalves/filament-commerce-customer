<?php

namespace JeffersonGoncalves\FilamentCommerce\Customer\Resources\Customer\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use JeffersonGoncalves\FilamentCommerce\Customer\Resources\Customer\CustomerResource;

class ListCustomer extends ListRecords
{
    protected static string $resource = CustomerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
