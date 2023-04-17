<?php

namespace App\Models;

use willvincent\Rateable\Rateable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Voyage extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'slug',
        'agence_id',
        'image',
        'date_depart',
        'date_arrive',
        'nb_jours',
        'nb_personne',
        'date_fin_reservation',
        'prix',
        'nb_limite_reservation',
    ];


    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function agence()
    {
        return $this->belongsTo(Agence::class);
    }
    use Rateable;




    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
