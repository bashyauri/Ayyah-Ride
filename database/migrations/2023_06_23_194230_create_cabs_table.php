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
        Schema::create('cabs', function (Blueprint $table) {
            $table->id();

            $table->string('brand');
            $table->string('model');
            $table->string('vin');
            $table->string('registration_no');
            $table->string('chassis_number');
            $table->string('no_of_seats');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cabs');
    }
};
