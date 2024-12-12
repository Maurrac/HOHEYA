<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('demandes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('annonce_id'); // Clé étrangère vers l'annonce
            $table->unsignedBigInteger('etudiant_id'); // Clé étrangère vers l'étudiant
            $table->text('message')->nullable();
            $table->enum('statut', ['en_attente', 'approuvee', 'rejetee'])->default('en_attente');
            $table->timestamps();
            
            $table->foreign('annonce_id')->references('id')->on('annonces')->onDelete('cascade');
            $table->foreign('etudiant_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demandes');
    }
};
