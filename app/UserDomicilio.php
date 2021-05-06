<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDomicilio extends Model
{
    protected $fillable = [
        "numero_exterior",
        "colonia",
        "cp",
        "ciudad",
        "fecha_nacimiento",
        "user_id"
    ];
}
