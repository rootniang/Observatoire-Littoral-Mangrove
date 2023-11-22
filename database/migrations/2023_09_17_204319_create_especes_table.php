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
        Schema::create('especes', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('nom_scientifique');
            $table->string('famille');
            $table->string('longevite');
            $table->text('description');
            $table->string('image');
            $table->enum('categorie', ['faune', 'flore']);
            $table->float('poid_min')->nullable();
            $table->float('poid_max')->nullable();
            $table->float('taille_min')->nullable();
            $table->float('taille_max')->nullable();
            $table->float('hauteur_min')->nullable();
            $table->float('hauteur_max')->nullable();
            $table->string('genre')->nullable();
            $table->string('type_reproduction')->nullable();
            $table->string('type_regime')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('especes');
    }
};
