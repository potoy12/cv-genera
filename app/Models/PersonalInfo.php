<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PersonalInfo extends Model
{
    //
    protected $fillable = ['nombre', 'apellidos', 'email', 'telefono', 'ciudad'];
}
