<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Game extends Model
{
    public function opponent(): HasOne
    {
        return $this->hasOne(Opponent::class);
    }

    public function atBat(): HasOne
    {
        return $this->hasOne(Bat::class);
    }

    public function pitching(): HasOne
    {
        return $this->hasOne(Pitch::class);
    }
}
