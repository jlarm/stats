<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pitch extends Model
{
    public function opponent(): BelongsTo
    {
        return $this->belongsTo(Opponent::class);
    }
}
