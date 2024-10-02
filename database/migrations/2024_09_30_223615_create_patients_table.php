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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
             // Patient
             $table->string('patient_id')->nullable(); // Identifiant unique patient
             $table->string('emergency_contact_name')->nullable(); // Contact d'urgence du docteur
             $table->string('emergency_contact_phone')->nullable(); // Numéro de téléphone du contact d'urgence
             $table->string('blood_type')->nullable(); // Type de sang du patient
             $table->text('medical_history')->nullable(); // Historique médical du patient
             $table->text('allergies')->nullable(); // Allergies du patient
             $table->text('current_medication')->nullable(); // Médicaments actuels du patient
             $table->string('insurance_provider')->nullable();// Provider d'assurance maladie du patient 
             $table->string('insurance_number')->nullable(); // Numéro d'assurance maladie du patient
             $table->date('admission_date')->nullable(); // Date d'admission du patient
             $table->date('discharge_date')->nullable(); // Date de sortie du patient
             $table->unsignedBigInteger('primary_doctor_id')->nullable(); // ID du docteur principal du patient
             $table->string('health_status')->nullable();
             $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
