<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Opponent extends Model
{
    /** @use HasFactory<\Database\Factories\OpponentFactory> */
    use HasFactory;

    public function atBats(): HasMany
    {
        return $this->hasMany(AtBat::class);
    }
}
