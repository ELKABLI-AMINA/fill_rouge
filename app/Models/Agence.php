<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Agence extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'owner_id',
        'description',
        'logo',
        'address',
        'slug',
        'ville_id'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function voyage()
    {
        return $this->hasMany(Voyage::class);
    }

    public function ville()
    {
        return $this->belongsTo(Ville::class);
    }
}
