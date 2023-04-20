<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ville extends Model
{
    use HasFactory;
    use Searchable;


    public function agences()
    {
        return $this->hasMany(Agence::class);
    }
}
