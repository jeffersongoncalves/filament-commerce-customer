<?php

namespace JeffersonGoncalves\FilamentCommerce\Customer\Resources\Customer\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CustomerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(null)
            ->components([
                Section::make('Details')
                    ->schema([
                        TextInput::make('email'),
                        TextInput::make('first_name'),
                        TextInput::make('last_name'),
                    ])->columns(2),
            ]);
    }
}
