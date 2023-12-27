<?php

namespace App\Livewire\AtBat;

use App\Models\Player;
use Livewire\Component;

class Create extends Component
{
    public Player $player;

    public function render()
    {
        return view('livewire.at-bat.create')->layout('layouts.app');
    }
}
