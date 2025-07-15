<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Opponent extends Model
{
    public function games(): HasMany
    {
        return $this->hasMany(Game::class);
    }

    public function bats(): HasMany
    {
        return $this->hasMany(Bat::class);
    }

    public function pitches(): HasMany
    {
        return $this->hasMany(Pitch::class);
    }
}
