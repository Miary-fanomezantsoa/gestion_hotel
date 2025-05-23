<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salle extends Model
{

    protected $table = 'salles';

    protected $fillable = [
        'nom',
        'nbrPersonne', 
        'description', 
        'prix', 
        'disponible'
    ];

    public function reservations()
    {
        return $this->hasMany(ReservationEvenement::class);
    }

}
