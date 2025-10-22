<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('notes_bien', function (Blueprint $table) {
            $table->id('ID_NOTE');
            $table->foreignId('ID_BIEN')->constrained('biens', 'ID_BIEN')->onDelete('cascade');
            $table->string('NOM_VISITEUR', 100);
            $table->tinyInteger('NOTE')->unsigned(); // Note 1 à 5
            $table->text('COMMENTAIRE')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('notes_bien');
    }
};
