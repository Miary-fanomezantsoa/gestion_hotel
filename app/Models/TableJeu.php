<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TableJeu extends Model
{
    protected $table = 'table_jeux';

    protected $fillable = [
        'nom', 'type_jeu', 'num_joueur', 'resultat', 'gain', 'perte', 'temps_jeu',
    ];
}

