@extends('layouts.planilla')

@section('titulo', 'Registro de Gategoria')

@section('contenido')
    <div class="p-1">
        <div class="text-secondary">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center text-blue text-uppercase">
                    <h4>
                        Consulta de Categorias
                    </h4>
                </div>
            </div>
        </div>
    </div>

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Codigo de Categoria</th>
            <th scope="col">Nombre de Categoria</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($categorias as $categoria )
            <tr>
                <td>{{$categoria->codigo_categoria}}</td>
                <td>{{$categoria->descripcion_categoria}}</td>
                <td>
                    <form action="{{ route('cate.delete',$categoria->codigo_categoria) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" onclick="return confirm('¿Quieres Eliminar?')" value="eliminar">
                    </form>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
