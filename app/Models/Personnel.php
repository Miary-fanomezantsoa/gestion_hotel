<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    protected $table = 'personnel'; 
    protected $primaryKey = 'id_personnel';

    const DEPARTEMENTS = [
        'Réception',
        'Restauration',
        'Ménage',
        'Direction et Gestion',
        'Bien-être et loisirs',
        'Maintenance et Sécurité'
    ];
    protected $fillable = [
        'nom',
        'prenom',
        'poste',
        'email',
        'telephone',
        'date_embauche',
        'salaire',
        'actif',
        'departement'
    ];
}
