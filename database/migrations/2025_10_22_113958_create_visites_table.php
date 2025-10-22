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
       Schema::create('visites', function (Blueprint $table) {
    $table->id('ID_VISITE');
    $table->foreignId('BIEN_ID')->constrained('biens', 'ID_BIEN');
    $table->foreignId('CLIENT_ID')->constrained('clients', 'ID_CLIENT');
    $table->date('DATE_VISITE');
    $table->time('HEURE');
    $table->decimal('MONTANT', 15, 2)->default(0);
    $table->string('STATUT', 50)->default('en attente');
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visites');
    }
};
