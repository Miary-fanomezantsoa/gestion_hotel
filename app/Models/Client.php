<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $primaryKey = 'id_client';
    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'telephone'
    ];
}
