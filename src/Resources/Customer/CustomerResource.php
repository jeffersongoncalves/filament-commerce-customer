<?php

namespace JeffersonGoncalves\FilamentCommerce\Customer\Resources\Customer;

use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use JeffersonGoncalves\Commerce\Customer\Models\Customer;
use JeffersonGoncalves\FilamentCommerce\Customer\CommerceCustomerPlugin;
use JeffersonGoncalves\FilamentCommerce\Customer\Resources\Customer\Pages\CreateCustomer;
use JeffersonGoncalves\FilamentCommerce\Customer\Resources\Customer\Pages\EditCustomer;
use JeffersonGoncalves\FilamentCommerce\Customer\Resources\Customer\Pages\ListCustomer;
use JeffersonGoncalves\FilamentCommerce\Customer\Resources\Customer\Schemas\CustomerForm;
use JeffersonGoncalves\FilamentCommerce\Customer\Resources\Customer\Tables\CustomerTable;

class CustomerResource extends Resource
{
    protected static ?string $model = Customer::class;

    public static function getNavigationGroup(): ?string
    {
        try {
            return CommerceCustomerPlugin::get()->getNavigationGroup();
        } catch (\Throwable) {
            return config('filament-commerce-customer.navigation_group', 'Commerce — Sales');
        }
    }

    public static function form(Schema $schema): Schema
    {
        return CustomerForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CustomerTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListCustomer::route('/'),
            'create' => CreateCustomer::route('/create'),
            'edit' => EditCustomer::route('/{record}/edit'),
        ];
    }
}
