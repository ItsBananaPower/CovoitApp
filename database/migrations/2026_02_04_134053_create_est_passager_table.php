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
        Schema::create('est_passager', function (Blueprint $table) {
            $table->foreignId('id_employe')->constrained('employes');
            $table->foreignId('id_trajet')->constrained('trajets');
            $table->string('date_inscription');
            $table->primary(['id_employe','id_trajet','date_inscription']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('est_passager');
    }
};
