<?php

use App\Livewire\Team\Index;
use App\Models\Team;
use Database\Factories\UserFactory;
use Livewire\Livewire;

it('can see the team page when logged in', function () {
    $user = UserFactory::new()->create();

    Livewire::actingAs($user)
        ->test(Index::class)
        ->assertStatus(200);
});

it('can not see the team page when not logged in', function () {
    Livewire::test(Index::class)
        ->assertStatus(403);
});

it('can see list of teams', function () {
    $user = UserFactory::new()->create();

    Team::create([
        'name' => 'Team 1',
        'year' => '2024',
    ]);

    Team::create([
        'name' => 'Team 2',
        'year' => '2025',
    ]);

    Team::create([
        'name' => 'Team 3',
        'year' => '2026',
    ]);

    Livewire::actingAs($user)
        ->test(Index::class)
        ->assertStatus(200)
        ->assertSeeText('Team 1')
        ->assertSeeText('Team 2')
        ->assertSeeText('Team 3');
});
