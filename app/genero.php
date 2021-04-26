<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class genero extends Model
{
    protected $table='genero';
    public $timestamps=false;
    protected $fillable=[
        'codigo_genero', 'descripcion'
    ];

    protected $primaryKey='codigo_genero';
}
