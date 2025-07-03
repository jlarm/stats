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
}
