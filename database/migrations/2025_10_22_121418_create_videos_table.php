<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id('ID_VIDEO');
            $table->foreignId('ID_BIEN')->constrained('biens', 'ID_BIEN')->onDelete('cascade');
            $table->string('URL_VIDEO', 255);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('videos');
    }
};
