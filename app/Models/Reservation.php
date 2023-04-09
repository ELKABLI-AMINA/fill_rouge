<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    public $fillable =['user_id', 'voyage_id','reservation_date','participants','Montant_total','status'];

    public function agence()
    {
        return $this->hasOne(agence::class);
    }
}
