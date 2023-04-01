<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voyage extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'image',
        'date_de_depart',
        'date_arrive',
        'prix',
        'date_fin_reservation',
        'nb_max_participants',
    ];
    
}
