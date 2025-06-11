<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SalleSport extends Model
{
   
    use HasFactory;

    protected $table = 'salle_de_sports';
    protected $fillable = ['nom', 'capacite', 'equipements', 'disponible'];
}
