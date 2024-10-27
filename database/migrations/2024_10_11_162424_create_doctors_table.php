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
        Schema::create('doctors', function (Blueprint $table){
            
            $table->string('id')->primary();  // ID personnalisé comme clé primaire
            $table->string('specialization')->nullable(); // Pour les docteurs
            $table->string('license_number')->nullable(); // Numéro de la licence de travail pour les docteurs 
            $table->integer('years_of_experience')->nullable(); // Années d'expérience pour les docteurs
            $table->string('department')->nullable(); // Département dans lequel travaille le docteur.
            $table->string('shift')->nullable(); // Horaire de travail (ex: jour, nuit, rotation).
            $table->date('hire_date')->nullable(); // Date d'embauche
            $table->decimal('consultation_fee', 8, 2)->nullable();// Tarif de consultation
            $table->string('qualification')->nullable();// Des révisions de la dernière année pour  la qualification du docteur. 

      });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
