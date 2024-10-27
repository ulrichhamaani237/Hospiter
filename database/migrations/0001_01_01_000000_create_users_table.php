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
       
            // Informations personnelles
            $table->id();
            $table->string('id_personnel');
            $table->enum('role',[
            'admin',           // Administrateur
            'sub_admin',       // Sous-administrateur
            'doctor',          // Médecin
            'nurse',           // Infirmière
            'lab_technician',  // Technicien de laboratoire
            'pharmacist',      // Pharmacien
            'receptionist',    // Réceptionniste
            'accountant',      // Comptable
            'patient',         // Patient
            'surgeon',         // Chirurgien
            'specialist',      // Spécialiste (Cardiologue, etc.)
            'cleaner',         // Agent d’entretien
            'security',        // Sécurité
            'stagiaire', 
        ]);
            $table->string('name'); // Nom du docteur
            $table->string('last_name')->nullable(); // Prénom du docteur
            $table->string('email')->unique(); // Adresse e-mail du docteur
            $table->timestamp('email_verified_at')->nullable(); // Date de vérification de l'adresse e-mail
            $table->string('password'); // Mot de passe du docteur
            $table->enum('gender',['male','female','other'])->nullable(); // Genre ['male','female','other']
            $table->date('birth_date')->nullable(); // Date de naissance du docteur
            $table->enum('marital_status',['marié','celibataire'])->nullable(); // situation familiale ['marier','celibataire']
            $table->string('nationality')->nullable();  // Nationalité du docteur           
            // Coordonnées
            $table->string('phone_number')->nullable(); // Numéro de téléphone du docteur
            $table->string('address')->nullable(); // Adresse du docteur
            $table->string('city')->nullable(); // Ville du docteur
            $table->string('postal_code')->nullable(); // Code postal du docteur
            $table->string('country')->nullable(); // Pays du docteur
            $table->timestamps(); // Dates de création et de mise à jour
        });

       
        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
