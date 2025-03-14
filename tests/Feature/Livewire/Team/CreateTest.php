<?php

use App\Livewire\Team\Create;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(Create::class)
        ->assertStatus(200);
});

it('can create a team', function () {
    Livewire::test(Create::class)
        ->set('name', 'Test Team')
        ->set('year', 2024)
        ->call('addTeam')
        ->assertHasNoErrors();
});
