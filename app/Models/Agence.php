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
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
