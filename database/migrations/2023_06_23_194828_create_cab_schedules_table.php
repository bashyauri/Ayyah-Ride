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
        Schema::create('cab_schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cab_id')->constrained('cabs');
            $table->date('date');
            $table->string('city');
            $table->string('destination');
            $table->time('time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cab_schedules');
    }
};