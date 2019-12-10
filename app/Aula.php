<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    protected $fillable = [
    'id_aula','nombre_aula','detalle_aula'

];
protected $primaryKey = 'id_aula';
}
