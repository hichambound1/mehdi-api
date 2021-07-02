<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agente_order extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'agente_id',

    ];
}
