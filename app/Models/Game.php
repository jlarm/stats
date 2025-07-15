<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Game extends Model
{
    protected $casts = [
        'date' => 'date',
    ];

    public function opponent(): BelongsTo
    {
        return $this->belongsTo(Opponent::class);
    }

    public function bat(): HasOne
    {
        return $this->hasOne(Bat::class);
    }

    public function pitch(): HasOne
    {
        return $this->hasOne(Pitch::class);
    }
    
    // Handle nested form data for at_bats
    public function getBatAttribute()
    {
        return $this->bat ?? new Bat();
    }
    
    // Handle nested form data for pitching
    public function getPitchAttribute()
    {
        return $this->pitch ?? new Pitch();
    }
    
    protected static function booted()
    {
        static::saved(function (Game $game) {
            // Handle the bat relation
            $bat = $game->bat ?? new Bat();
            
            if (request()->has('bat')) {
                $bat->fill(request()->input('bat'));
                $bat->game_id = $game->id;
                $bat->opponent_id = $game->opponent_id;
                $bat->date = $game->date;
                $bat->save();
            }
            
            // Handle the pitching relation
            $pitch = $game->pitch ?? new Pitch();
            
            if (request()->has('pitch')) {
                $pitch->fill(request()->input('pitch'));
                $pitch->game_id = $game->id;
                $pitch->opponent_id = $game->opponent_id;
                $pitch->date = $game->date;
                $pitch->save();
            }
        });
    }
}
