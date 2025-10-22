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
    Schema::table('biens', function (Blueprint $table) {
        $table->integer('NB_PIECES')->default(1);
        $table->integer('NB_DOUCHES')->default(1);
        $table->boolean('GARAGE')->default(false);
        $table->boolean('NOUVELLE_CONSTRUCTION')->default(false);
        $table->enum('ETAGE', ['BASSE', 'HAUTE'])->default('BASSE');
    });
}

public function down(): void
{
    Schema::table('biens', function (Blueprint $table) {
        $table->dropColumn(['NB_PIECES', 'NB_DOUCHES', 'GARAGE', 'NOUVELLE_CONSTRUCTION', 'ETAGE']);
    });
}

  
};
