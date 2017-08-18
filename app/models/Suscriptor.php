<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Suscriptor extends Model
{
    protected $table='suscriptores';
    protected $fillable=['nombres','apellidos','cedula'];
}
