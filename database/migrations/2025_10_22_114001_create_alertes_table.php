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
        Schema::create('alertes', function (Blueprint $table) {
    $table->id('ID_ALERTE');
    $table->foreignId('CLIENT_ID')->constrained('clients', 'ID_CLIENT');
    $table->foreignId('TYPE_ID')->constrained('type_biens', 'ID_TYPE');
    $table->foreignId('LOCALISATION_ID')->constrained('localisations', 'ID_LOCALISATION');
    $table->decimal('BUDGET_MIN', 15, 2)->nullable();
    $table->decimal('BUDGET_MAX', 15, 2)->nullable();
    $table->string('PERIODE', 50)->nullable(); // mensuel / annuel
    $table->date('DATE_DEBUT')->nullable();
    $table->date('DATE_FIN')->nullable();
    $table->string('STATUT', 50)->default('actif');
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alertes');
    }
};
