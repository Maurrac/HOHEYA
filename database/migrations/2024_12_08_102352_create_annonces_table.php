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
        Schema::create('annonces', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('proprietaire_id'); // Clé étrangère vers le propriétaire
            $table->string('titre');
            $table->text('description');
            $table->string('localisation');
            $table->integer('prix');
            $table->enum('type', ['logement', 'colocation']); // Type d'annonce
            $table->timestamps();
            
            $table->foreign('proprietaire_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('annonces');
    }
};
