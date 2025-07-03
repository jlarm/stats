<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Opponent;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pitches', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->foreignIdFor(Opponent::class);
            $table->decimal('ip');
            $table->integer('gs');
            $table->integer('bf');
            $table->integer('tp');
            $table->integer('tb');
            $table->integer('ts');
            $table->integer('h');
            $table->integer('r');
            $table->integer('er');
            $table->integer('bb');
            $table->integer('so');
            $table->integer('kl');
            $table->integer('hbp');
            $table->integer('lob');
            $table->integer('bk');
            $table->integer('pik');
            $table->integer('cs');
            $table->integer('sb');
            $table->integer('wp');
            $table->integer('w');
            $table->integer('l');
            $table->integer('sv');
            $table->integer('bs');
            $table->decimal('baa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pitches');
    }
};
