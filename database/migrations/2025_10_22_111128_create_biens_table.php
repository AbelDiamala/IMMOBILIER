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
    Schema::create('biens', function (Blueprint $table) {
        $table->id('ID_BIEN');
        $table->string('TITRE', 150);
        $table->text('DESCRIPTION')->nullable();
        $table->integer('NB_PIECES')->default(1);
        $table->integer('NB_DOUCHES')->default(1);
        $table->boolean('GARAGE')->default(false);
        $table->boolean('NOUVELLE_CONSTRUCTION')->default(false);
        $table->enum('ETAGE', ['BASSE', 'HAUTE'])->default('BASSE');
        $table->decimal('PRIX', 15, 2);
        $table->integer('SURFACE')->nullable();
        $table->foreignId('TYPE_ID')->constrained('type_biens', 'ID_TYPE');
        $table->foreignId('STANDING_ID')->constrained('standings', 'ID_STANDING');
        $table->foreignId('STATUT_ID')->constrained('statuts', 'ID_STATUT');
        $table->foreignId('LOCALISATION_ID')->constrained('localisations', 'ID_LOCALISATION');
        $table->foreignId('UTILISATEUR_ID')->constrained('utilisateurs', 'ID_UTILISATEUR');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biens');
    }
};
