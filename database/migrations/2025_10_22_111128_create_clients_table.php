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
    Schema::create('clients', function (Blueprint $table) {
        $table->id('ID_CLIENT');
        $table->string('NOM', 100);
        $table->string('EMAIL', 150)->nullable();
        $table->string('TELEPHONE', 20)->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
