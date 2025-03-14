<?php

namespace App\Livewire\Team;

use App\Models\Team;
use Livewire\Component;

class Index extends Component
{
    public function mount()
    {
        if (! auth()->check()) {
            abort(403);
        }
    }

    public function render()
    {
        return view('livewire.team.index', [
            'teams' => Team::orderBy('year', 'desc')->get(),
        ]);
    }
}
