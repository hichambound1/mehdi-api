<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agente extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'prenom',
        'phone',
    ];
    private function orders()
    {
        return $this->belongsToMany(Order::class);
    }
}
