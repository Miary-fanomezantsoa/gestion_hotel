<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salle extends Model
{

    protected $table = 'salles';

    protected $fillable = [
        'nom',
<<<<<<< HEAD
        'nbrPersonne', 
        'description', 
        'prix', 
=======
        'nbrPersonne',
        'description',
        'prix',
>>>>>>> e925d63 (Sauvegarde avant pull)
        'disponible'
    ];

    public function reservations()
    {
        return $this->hasMany(ReservationEvenement::class);
    }

}
