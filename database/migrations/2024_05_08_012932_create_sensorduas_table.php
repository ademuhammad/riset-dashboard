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
        Schema::create('sensorduas', function (Blueprint $table) {
            $table->id();
            $table->decimal('value_suhu');
            $table->decimal('value_kelembaban');
            $table->decimal('value_pm25');
            $table->decimal('value_pm10');
            $table->decimal('value_co');
            $table->decimal('value_co2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sensorduas');
    }
};
