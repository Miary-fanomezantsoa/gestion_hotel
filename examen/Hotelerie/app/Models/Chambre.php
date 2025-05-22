<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chambre extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_chambre';

    protected $fillable = [
        'numero_chambre', 'type_chambre', 'capacite', 'prix_par_nuit', 'etat', 'id_etage'
    ];

    public function etage()
    {
        return $this->belongsTo(Etage::class, 'id_etage', 'id_etage');
    }
}
