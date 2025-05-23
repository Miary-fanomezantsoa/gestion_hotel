<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReservationEvenement extends Model
{

    protected $table = 'reservations_evenements';

    protected $fillable = [
        'nom_client',
        'email_client',
        'telephone_client',
        'type_evenement',
        'date_evenement',
        'heure_debut',
        'heure_fin',
        'salle_id',
    ];

    public function salle()
    {
        return $this->belongsTo(Salle::class);
    }
}
