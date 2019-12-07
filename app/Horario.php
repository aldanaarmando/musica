<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    protected $fillable = [
        'id_horario','id_aula','id_curso','dias','horario'
       ];
       protected $primaryKey = 'id_horario';
}
