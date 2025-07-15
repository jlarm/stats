<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Bat extends Model
{
    protected $fillable = [
        'date', 'opponent_id', 'game_id',
        'pa', 'ab', 'h', 'singles', 'doubles', 'triples',
        'hr', 'rbi', 'r', 'bb', 'so', 'kl', 'hbp',
        'sac', 'sf', 'roe', 'fc', 'sb', 'cs', 'pik'
    ];

    protected $casts = [
        'date' => 'date',
    ];

    public function opponent(): BelongsTo
    {
        return $this->belongsTo(Opponent::class);
    }

    public function game(): BelongsTo
    {
        return $this->belongsTo(Game::class);
    }
}
