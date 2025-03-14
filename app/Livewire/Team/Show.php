<?php

namespace App\Livewire\Team;

use App\Models\Team;
use Flux\Computed;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class Show extends Component
{
    use WithPagination;

    public Team $team;

    #[Computed]
    public function stats()
    {
        return $this->team->atBats()
            ->with('opponent')
            ->orderBy('date', 'desc')
            ->paginate(10);
    }

    public function render(): View
    {
        return view('livewire.team.show')
            ->title($this->team->year . ' ' . $this->team->name);
    }
}
