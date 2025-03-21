<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('at_bats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('team_id');
            $table->foreignId('opponent_id');
            $table->date('date');
            $table->integer('pa')->default(0);
            $table->integer('ab')->default(0);
            $table->decimal('avg', 4, 3)->default(0);
            $table->decimal('obp', 4, 3)->default(0);
            $table->decimal('ops', 4, 3)->default(0);
            $table->decimal('slg', 4, 3)->default(0);
            $table->integer('h')->default(0);
            $table->integer('singles')->default(0);
            $table->integer('doubles')->default(0);
            $table->integer('triples')->default(0);
            $table->integer('hr')->default(0);
            $table->integer('rbi')->default(0);
            $table->integer('r')->default(0);
            $table->integer('bb')->default(0);
            $table->integer('so')->default(0);
            $table->integer('kl')->default(0);
            $table->integer('hbp')->default(0);
            $table->integer('sac')->default(0);
            $table->integer('sf')->default(0);
            $table->integer('roe')->default(0);
            $table->integer('fc')->default(0);
            $table->integer('sb')->default(0);
            $table->integer('sbp')->default(0);
            $table->integer('cs')->default(0);
            $table->integer('pik')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('at_bats');
    }
};
