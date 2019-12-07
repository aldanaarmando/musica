<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administracion extends Model
{
    protected $fillable = [
        'id_admin','ci','nombre','apellido_pat','apellido_mat','fecha_nac','genero','telefono'
       ];
       protected $primaryKey = 'id_admin';
}
