<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table='cliente';
    public $timestamps=false;
    protected $fillable=[
         'nit', 'nombre', 'nacimiento', 'edad', 'correo', 'telefono','genero_codigo', 'departamento_codigo', 'categoria_codigo'
    ];

    protected $primaryKey='nit';
}
