<?php

use App\Livewire\Team\Index;
use Database\Factories\UserFactory;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(Index::class)
        ->assertStatus(200);
});

it('can see the team page when logged in', function () {
    $user = UserFactory::new()->create();

    Livewire::actingAs($user)
        ->test(Index::class)
        ->assertStatus(200);
});
