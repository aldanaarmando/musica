<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = [
    'id_curso','nombre_curso','nivel','id_profesor'
];
protected $primaryKey = 'id_curso';
}
