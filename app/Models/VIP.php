<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VIP extends Model
{
    protected $table = 'table_private'; 

    protected $fillable = [
        'name',
        'email',
        'birth_date',
        'gender',
        'phone_number',
        'address',
    ];
}
