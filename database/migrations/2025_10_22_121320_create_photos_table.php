<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('photos', function (Blueprint $table) {
            $table->id('ID_PHOTO');
            $table->foreignId('ID_BIEN')->constrained('biens', 'ID_BIEN')->onDelete('cascade');
            $table->string('URL_PHOTO', 255);
            $table->integer('ORDRE')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('photos');
    }
};
