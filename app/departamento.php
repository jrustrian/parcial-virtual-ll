<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class departamento extends Model
{
    protected $table='departamento1';
    public $timestamps=false;
    protected $fillable=[
        'codigodepa', 'descripcion'
    ];

    protected $primaryKey='codigodepa';
}
