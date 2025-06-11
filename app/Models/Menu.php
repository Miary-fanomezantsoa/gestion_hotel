<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $primaryKey = 'id_menu';
    protected $fillable = [
        'nom',
        'description',
        'prix',
        'categorie',
        'disponible',
        'id_restaurant'
    ];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class, 'id_restaurant');
    }
}
