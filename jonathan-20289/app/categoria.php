<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    protected $table='categoria';
    public $timestamps=false;
    protected $fillable=[
        'codigo_categoria', 'descripcion_categoria'
    ];

    protected $primaryKey='codigo_categoria';
}{
    //
}
