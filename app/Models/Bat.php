<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Bat extends Model
{
    protected $casts = [
        'date' => 'date',
    ];

    public function opponent(): BelongsTo
    {
        return $this->belongsTo(Opponent::class);
    }
}
