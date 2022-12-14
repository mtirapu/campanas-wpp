<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funnel extends Model
{
    use HasFactory;

    protected $fillable = [
        'funnel_nombre',
        'funnel_fecha_registro',
        'funnel_id'
    ];

}
