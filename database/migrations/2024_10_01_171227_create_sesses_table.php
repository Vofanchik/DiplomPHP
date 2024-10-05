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
        Schema::create('sesses', function (Blueprint $table) {
            $table->id();
            $table->integer('hall_id');
            $table->integer('movie_id');
            $table->foreign('hall_id')->references('id')->on('halls')->constrained()->onDelete('cascade');;
            $table->foreign('movie_id')->references('id')->on('movies')->constrained()->onDelete('cascade');;
            $table->dateTime('start_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sesses');
    }
};
