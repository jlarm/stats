<?php

namespace App\Livewire\Team;

use App\Models\Team;
use Flux;
use Livewire\Component;

class Index extends Component
{
    public string $name = '';
    public int $year;

    public function mount()
    {
        if (! auth()->check()) {
            abort(403);
        }
    }

    public function addTeam()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'year' => 'required|integer|min:1900|max:' . date('Y'),
        ]);

        Team::create([
            'name' => $this->name,
            'year' => $this->year,
        ]);

        $this->reset('name', 'year');

        $this->dispatch('team-added');

        $this->modal('add-team')->close();

        Flux::toast('Team added successfully', variant: 'success');
    }

    public function render()
    {
        return view('livewire.team.index', [
            'teams' => Team::orderBy('year', 'desc')->get(),
        ])->title('Teams');
    }
}
