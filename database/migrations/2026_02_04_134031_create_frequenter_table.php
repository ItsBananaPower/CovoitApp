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
        Schema::create('frequenter', function (Blueprint $table) {
            $table->foreignId('id_campus')->constrained('campuses');
            $table->foreignId('id_employe')->constrained('employes');
            $table->primary(['id_campus', 'id_employe']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('frequenter');
    }
};
