<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $fillable = [
        'id_cargo','nombre_cargo'
       ];
       protected $primaryKey = 'id_cargo';
}
