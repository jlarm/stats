<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Opponent;
use App\Models\Bat;
use App\Models\Pitch;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->foreignIdFor(Opponent::class);
            $table->foreignIdFor(Bat::class)->nullable();
            $table->foreignIdFor(Pitch::class)->nullable();
            $table->integer('opponent_score');  
            $table->integer('our_score');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
