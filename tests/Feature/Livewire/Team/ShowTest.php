<?php

use App\Livewire\Team\Show;
use App\Models\Team;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;

uses(RefreshDatabase::class);

it('redirects unauthenticated users to login page', function () {
    $team = Team::factory()->create();

    $this->get(route('teams.show', $team))
        ->assertRedirect(route('login'));
});

it('renders successfully for authenticated users', function () {
    $user = User::factory()->create();
    $team = Team::factory()->create();

    $this->actingAs($user)
        ->get(route('teams.show', $team))
        ->assertOk()
        ->assertSee($team->year . ' ' . $team->name)
        ->assertSeeLivewire(Show::class);
});

it('mounts the component with correct data', function () {
    $user = User::factory()->create();
    $team = Team::factory()->create();

    Livewire::actingAs($user)
        ->test(Show::class, ['team' => $team])
        ->assertStatus(200);
});
