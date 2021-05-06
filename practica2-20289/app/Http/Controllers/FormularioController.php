<?php

namespace App\Http\Controllers;

use App\Models\formulario;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;


class FormularioController extends Controller
{

    public function ingresarfor(){

        return view('formulario');
    }


    public function for(Request $request){

        //Validaciones del formulario
        $data = request()->validate([
            'codigo' => 'required|max:11',
            'nombre'=>'required|max:100',
            'apellido'=>'required|max:100',
            'telefono'=>'required|max:10',
            'direccion'=>'required|max:100',
            'correo'=>'required|max:100',

        ],[
            'codigo.required'=>'El campo codigo no debe estar vacio.',
            'nombre.required'=>'El campo nombre no debe estar vacio.',
            'apellido.required'=>'El campo apellido no debe estar vacio.',
            'telefono.required'=>'El campo telefono no debe estar vacio.',
            'direccion.required'=>'El campo telefono no debe estar vacio.',
            'correo.required'=>'El campo telefono no debe estar vacio.',

            'codigo.max'=>'El codigo no puede tener más 11 caracteres.',
            'nombre.max'=>'El nombre no puede tener más 100 caracteres.',
            'apellido.max'=>'El apellido no puede tener más 100 caracteres.',
            'telefono.max'=>'El apellido no puede tener más 100 caracteres.',
            'direccion.max'=>'El apellido no puede tener más 100 caracteres.',
            'correo.max'=>'El apellido no puede tener más 100 caracteres.',
        ]); // termina el bloque de validaciones



        try{
            //Guardar el producto

            $formulario= formulario::create([
                'idformulario'=> $data['codigo'],
                'nombre'=>$data['nombre'],
                'apellido'=>$data['apellido'],
                'telefono'=>$data['telefono'],
                'direccion'=>$data['direccion'],
                'correo'=>$data['correo']
            ]);

        }
        catch(QueryException $queryException){ //capturamos el erro en el catch
            return redirect()->route('ingresar')->with('warning', 'Ocurrio un error al registrar el producto. ');
        }

        return redirect()->route('ingresar')->with('success', 'Registro realizado exitosamente');

    }

    public function Mostrar()
    {
        $datos['formularios']=formulario::paginate(10);
        return view('mostrar',$datos);

    }
}
