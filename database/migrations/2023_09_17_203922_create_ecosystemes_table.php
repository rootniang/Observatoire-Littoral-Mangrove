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
        Schema::create('ecosystemes', function (Blueprint $table) {
            $table->id();
            $table->string('libelle');
            $table->string('localisation');
            $table->enum('typesol', ['sableux', 'rocheux', 'caillouteux', 'vaseux']);
            $table->foreignId('auteur')->constrained(table: 'users', indexName: 'ecosysteme_user_id')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ecosystemes');
    }
};
