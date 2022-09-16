<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    use HasFactory;
    public $timestamps = false;
    
    protected $fillable = [
        'funnel_id',
        'mensaje_cuerpo',
        'mensaje_dias_act'
    ];

}
