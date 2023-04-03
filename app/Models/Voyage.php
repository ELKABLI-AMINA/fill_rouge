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
      'slug',
      'agence_id',
      'image',
      'date_depart',
      'date_arrive',
      'nb_jours',
      'nb_personne',
      'date_fin_reservation',
      'prix',
      'nb_max_participants',
    ];

    
    public function getRouteKeyName()
    {
       return 'slug' ;
    }

    public function agence()
    {
        return $this->belongsTo(Agence::class);
    }
    
}
