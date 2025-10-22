<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('visite_details', function (Blueprint $table) {
            $table->id('ID_VISITE_DETAIL');
            $table->foreignId('ID_BIEN')->constrained('biens', 'ID_BIEN')->onDelete('cascade');
            $table->string('IP_VISITEUR', 45)->nullable();
            $table->string('USER_AGENT', 255)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('visite_details');
    }
};
