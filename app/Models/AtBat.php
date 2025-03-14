<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AtBat extends Model
{
    /** @use HasFactory<\Database\Factories\AtBatFactory> */
    use HasFactory;

    protected $casts = [
        'date' => 'date',
    ];

    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    public function opponent(): BelongsTo
    {
        return $this->belongsTo(Opponent::class);
    }
}
