<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;

    //protected $fillalble = ['placa', 'marca', 'modelo', 'color'];
    protected $fillable = ['placa', 'marca', 'modelo', 'color'];
    
    public function conductors_vehiculos(){
        return $this->belongsTo(Conductor::class);
    }
}
