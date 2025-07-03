<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bats', function (Blueprint $table) {
            $table->id();
            $table->datetime('datetime');
            $table->integer('pa');
            $table->integer('ab');
            $table->integer('h');
            $table->integer('singles');
            $table->integer('doubles');
            $table->integer('triples');
            $table->integer('hr');
            $table->integer('rbi');
            $table->integer('r');
            $table->integer('bb');
            $table->integer('so');
            $table->integer('kl');
            $table->integer('hbp');
            $table->integer('sac');
            $table->integer('sf');
            $table->integer('roe');
            $table->integer('fc');
            $table->integer('sb');
            $table->integer('sc');
            $table->integer('pik');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bats');
    }
};
