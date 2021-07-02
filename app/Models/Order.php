<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'description',
        'user_id',
        'sous_category_id',
        'nbr_hours',
        'prix_total',
        'time',
    ];
    private function agentes()
    {
        return $this->belongsToMany(Agente::class);
    }
}
