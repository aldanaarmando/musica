<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    protected $fillable = [
        'id_profesor','ci','nombre','apellido_pat','apellido_mat','fecha_nac','genero','telefono','id_cargo'
       ];
       protected $primaryKey = 'id_profesor';
}
