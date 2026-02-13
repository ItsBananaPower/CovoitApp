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
        Schema::create('trajets', function (Blueprint $table) {
            $table->id();
            $table->string('date_time_depart');
            $table->string('date_time_arrivee');
            $table->foreignId('id_campus_depart')->constrained('campuses');
            $table->foreignId('id_campus_arrivee')->constrained('campuses');
            $table->foreignId('id_voiture')->constrained('voitures');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trajets');
    }
};
