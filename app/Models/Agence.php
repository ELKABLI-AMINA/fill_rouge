<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agence extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'owner_id',
        'description',
        'logo',
        'address',
        'slug'
    ];

    public function getRouteKeyName()
    {
       return 'slug' ;
    }
    public function agence()
    {
        return $this->hasOne(agence::class);
    }

    public function voyage()
    {
        return $this->hasMany(Voyage::class);
    }
}
