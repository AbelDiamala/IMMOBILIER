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
    Schema::create('utilisateurs', function (Blueprint $table) {
        $table->id('ID_UTILISATEUR');
        $table->string('NOM', 100);
        $table->string('EMAIL', 150)->unique();
        $table->string('PASSWORD');
        $table->foreignId('ROLE_ID')->constrained('roles', 'ID_ROLE')->onDelete('cascade');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('utilisateurs');
    }
};
