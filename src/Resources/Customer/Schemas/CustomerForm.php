<?php

namespace JeffersonGoncalves\FilamentCommerce\Customer\Resources\Customer\Schemas;

use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;

class CustomerForm
{
    public static function configure(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Details')
                    ->schema([
                        TextInput::make('email'),
                        TextInput::make('first_name'),
                        TextInput::make('last_name'),
                    ])->columns(2),
            ]);
    }
}
