<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conductor extends Model
{
    use HasFactory;

    protected $fillable = ['documento_identificacion','nombre', 'celular', 'email', 'fecha_nacimiento'];

    public function conductors_vehiculos(){
        return $this->belongsTo(Conductor::class);
    }
}
