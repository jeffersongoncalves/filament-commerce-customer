<?php

use JeffersonGoncalves\Commerce\Customer\Models\Customer;
use JeffersonGoncalves\FilamentCommerce\Customer\Resources\Customer\Pages\CreateCustomer;
use JeffersonGoncalves\FilamentCommerce\Customer\Resources\Customer\Pages\ListCustomer;
use Livewire\Livewire;

it('renders the customer list page', function () {
    Customer::factory()->count(2)->create();

    Livewire::test(ListCustomer::class)->assertOk();
});

it('creates a customer record through the panel', function () {
    Livewire::test(CreateCustomer::class)
        ->fillForm([
            'email' => 'jane@example.com',
        ])
        ->call('create')
        ->assertHasNoFormErrors();

    expect(Customer::query()->count())->toBe(1);
});
