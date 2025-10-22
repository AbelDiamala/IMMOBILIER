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
        Schema::create('reservations', function (Blueprint $table) {
    $table->id('ID_RESERVATION');
    $table->foreignId('BIEN_ID')->constrained('biens', 'ID_BIEN');
    $table->foreignId('CLIENT_ID')->constrained('clients', 'ID_CLIENT');
    $table->date('DATE_DEBUT');
    $table->date('DATE_FIN');
    $table->decimal('MONTANT', 15, 2);
    $table->string('STATUT', 50)->default('en attente');
    $table->date('DATE_RESERVATION');
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
