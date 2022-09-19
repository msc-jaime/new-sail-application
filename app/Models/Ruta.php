<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruta extends Model
{
    use HasFactory;

    protected $table = "conductors_vehiculos";

    protected $fillable = ['id_conductor', 'id_vehiculo', 'origen', 'destino', 'fecha_salida', 'fecha_llegada'];

    public function conductors() {
        return $this->hasMany(Conductor::class);
    }

    public function vehiculos() {
        return $this->hasMany(Vehiculo::class);
    }
}
