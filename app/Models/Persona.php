<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    //protected $guarded=[];
    protected $fillable = ['cPerApellido','cPerNombre','cPerDireccion','dPerFecNac','nPerEdad','nPerSueldo','cPerRnd','nPerEstado'];
}
