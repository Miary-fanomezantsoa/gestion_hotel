<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salle extends Model
{
    public function reservations()
    {
        return $this->hasMany(ReservationEvenement::class);
    }
}
