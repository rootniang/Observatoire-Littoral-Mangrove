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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('adresse');
            $table->string('numeroTelephone');
            $table->string('nom');
            $table->string('prenom');
            $table->date('dateDeNaissance');
            $table->enum('role', ['admin', 'pro']);
            $table->string('sigle');
            $table->string('libelle');
            $table->string('description');
            $table->enum('type', ['og', 'ong']);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
