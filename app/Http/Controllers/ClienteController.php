<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\genero;
use App\categoria;
use App\departamento;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{

//CRD CLIENTE
    public function MostrarC()
    {
        $clientes = DB::table('cliente')
            ->join('genero','genero.codigo_genero','=', 'cliente.genero_codigo')
            ->join('departamento1','departamento1.codigodepa','=', 'cliente.departamento_codigo')
            ->join('categoria','categoria.codigo_categoria','=', 'cliente.categoria_codigo')
            ->select('cliente.*','genero.descripcion as genero','categoria.descripcion_categoria as categoria', 'departamento1.descripcion as departamento')
            ->get();

        return view('cliente.mostrarcliente', compact('clientes'));

    }
    public function eliminarcliente(Cliente $cliente)
    {
        $cliente->delete();
        return back()->with('succes', 'cliente eliminado correctamento');
    }

    public function registrarC()
    {
        //Consultamos las marcas de productos que estan en la Base de datos
        $Generos = genero::all();
        $Departamentos = departamento::all();
        $Categorias = categoria::all();

        //Se retorna la ruta y se envian los objetos o variables hacia la vista
        return view('cliente.ingresarcliente', compact('Generos', 'Departamentos', 'Categorias'));

    }

    public function guardarC(Request $request)
    {

        //Validaciones del formulario
        $data = request()->all(); // termina el bloque de validaciones


        Cliente::create([
            'nit' => $data['nit'],
            'nombre' => $data['nombre'],
            'nacimiento' => $data['nacimiento'],
            'edad' => $data['edad'],
            'correo' => $data['correo'],
            'telefono' => $data['telefono'],
            'genero_codigo' => $data['genero'],
            'departamento_codigo' => $data['departamento'],
            'categoria_codigo' => $data['categoria'],
        ]);

        return redirect()->route('2')->with('success', 'Registro realizado exitosamente');

    }



//CRD CATEGORIA
    public function registrarCate()
    {

        return view('cliente.ingresarcate');

    }

    public function guardarCat(Request $request)
    {
        $data = request()->all();
        categoria::create([
            'codigo_categoria' => $data['codigocate'],
            'descripcion_categoria' => $data['nombrecate'],
        ]);
        return redirect()->route('4')->with('success', 'Registro realizado exitosamente');

    }
    public function MostrarCate()
    {
        $datos['categorias']=categoria::paginate(10);
        return view('cliente.mostrarcate',$datos);

    }
    public function eliminarcate(categoria $cate)
    {
        $cate->delete();
        return back()->with('succes', 'Gategoria eliminado correctamento');
    }




    //CRD DEPARTAMENTO
    public function registrarDe()
    {

        return view('cliente.ingresardepa');

    }

    public function guardarDe(Request $request)
    {
        $data = request()->all();
        departamento::create([
            'codigodepa' => $data['codigodepa'],
            'descripcion' => $data['nombredepa'],
        ]);
        return redirect()->route('6')->with('success', 'Registro realizado exitosamente');

    }
    public function MostrarD()
    {
        $datos['departamentos']=departamento::paginate(10);
        return view('cliente.mostrardepa',$datos);

    }
    public function eliminarde(departamento $depa)
    {
        $depa->delete();
        return back()->with('succes', 'departamento eliminado correctamento');
    }





    //CRD GENERO
    public function registrarge()
    {

        return view('cliente.ingresarge');

    }

    public function guardarge(Request $request)
    {
        $data = request()->all();
        genero::create([
            'codigo_genero' => $data['codigoge'],
            'descripcion' => $data['nombrege'],
        ]);
        return redirect()->route('8')->with('success', 'Registro realizado exitosamente');

    }
    public function Mostrargene()
    {
        $datos['generos']=genero::paginate(10);
        return view('cliente.mostrarge',$datos);
    }

    public function eliminarge(genero $genero1)
    {
        $genero1->delete();
        return back()->with('succes', 'cliente eliminado correctamento');
    }
}
