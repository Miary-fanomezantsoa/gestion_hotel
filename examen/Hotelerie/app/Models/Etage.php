<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Etage extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_etage';

    protected $fillable = [
        'nom_etage', 'description', 'niveau', 'capacite_max', 'acces_handicape'
    ];

    public function chambres()
    {
        return $this->hasMany(Chambre::class, 'id_etage', 'id_etage');
    }
}