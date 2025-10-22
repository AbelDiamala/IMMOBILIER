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
    Schema::create('transactions', function (Blueprint $table) {
        $table->id('ID_TRANSACTION');
        $table->foreignId('CLIENT_ID')->constrained('clients', 'ID_CLIENT');
        $table->foreignId('BIEN_ID')->constrained('biens', 'ID_BIEN');
        $table->date('DATE_TRANSACTION');
        $table->decimal('MONTANT', 15, 2);
        $table->string('TYPE_TRANSACTION', 50); // achat, location, etc.
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
