<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doctor extends Model
{
    use HasFactory;
    // deactiver l incrementation
    public $incrementing = false;

     // Ajoute un événement pour générer l'ID personnalisé
     protected static function boot()
     {
         parent::boot();
 
         static::creating(function ($doctor) {
             $doctor->id = $doctor->generateCustomId();
         });
     }

     // Génère l'ID personnalisé
    public function generateCustomId()
    {
        // Récupère l'année actuelle, uniquement les deux derniers chiffres (2024 devient 24)
        $year = now()->format('y');

        // Compte le nombre de docteurs déjà enregistrés cette année
        $lastDoctor = self::whereYear('created_at', now()->year)->orderBy('id', 'desc')->first();

        // Génère un numéro incrémental pour le docteur (001, 002, etc.)
        $number = $lastDoctor ? ((int)substr($lastDoctor->id, -3)) + 1 : 1;

        // Format le numéro en 3 chiffres (001, 002, etc.)
        $formattedNumber = str_pad($number, 3, '0', STR_PAD_LEFT);

        // Combine le tout dans le format "Doct24001"
        return 'Doct' . $year . $formattedNumber;
    }


}
