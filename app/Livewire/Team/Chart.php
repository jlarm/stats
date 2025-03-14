<?php

namespace App\Livewire\Team;

use App\Models\AtBat;
use App\Models\Team;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Chart extends Component
{
    public Team $team;

    public function getData(): array
    {
        $data = $this->team->atBats()
            ->orderBy('date', 'desc')
            ->get()
            ->map(fn (AtBat $atBat) => [
                'date' => $atBat->date->format('Y-m-d'),
                'avg' => $atBat->avg,
            ])->toArray();

        return array_reverse($data);
    }

    public function render(): View
    {
        return view('livewire.team.chart');
    }
}
