<?php

namespace App\Livewire\Team;

use App\Models\Team;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Index extends Component
{
    protected $listeners = ['team-added' => 'refreshTeams'];

    public function mount()
    {
        if (! auth()->check()) {
            abort(403);
        }
    }

    public function render(): View
    {
        return view('livewire.team.index', [
            'teams' => Team::orderBy('year', 'desc')->get(),
        ])->title('Teams');
    }
}
