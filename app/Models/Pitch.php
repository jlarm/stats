<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pitch extends Model
{
    protected $fillable = [
        'date', 'opponent_id', 'game_id',
        'ip', 'gs', 'bf', 'tp', 'tb', 'ts', 'h', 'r', 'er',
        'bb', 'so', 'kl', 'hbp', 'lob', 'bk', 'pik', 'cs',
        'sb', 'wp', 'w', 'l', 'sv', 'bs', 'baa'
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
