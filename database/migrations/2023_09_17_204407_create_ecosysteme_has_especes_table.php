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
        Schema::create('ecosysteme_has_especes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ecosysteme_id')->constrained(table: 'ecosystemes', indexName: 'especes_ecosysteme_id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('espece_id')->constrained(table: 'especes', indexName: 'ecosysteme_espece_id')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ecosysteme_has_especes');
    }
};
