<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $fillable = [
        'id_alumno','ci','nombre','apellido_pat','apellido_mat','fecha_nac','genero','telefono'
       ];
       protected $primaryKey = 'id_alumno';
}
}
