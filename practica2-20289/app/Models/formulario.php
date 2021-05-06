<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formulario extends Model
{
    protected $table='formulario';
    public $timestamps=false;
    protected $fillable=[
        'idformulario','nombre', 'apellido', 'telefono','direccion','correo'
    ];

    protected $primaryKey='idformulario';
}
