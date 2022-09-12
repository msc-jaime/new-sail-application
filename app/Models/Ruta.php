<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruta extends Model
{
    use HasFactory;

    protected $fillable = ['id_conductor', 'id_vehiculo', 'origen', 'destino', 'fecha_salida', 'fecha_llegada'];
}
