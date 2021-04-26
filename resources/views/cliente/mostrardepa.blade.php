@extends('layouts.planilla')

@section('titulo', 'Registro de Gategoria')

@section('contenido')
    <div class="p-1">
        <div class="text-secondary">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center text-blue text-uppercase">
                    <h4>
                        Consulta de Departamentos
                    </h4>
                </div>
            </div>
        </div>
    </div>

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Codigo de Departamento</th>
            <th scope="col">Nombre del Departamento</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($departamentos as $departamento )
            <tr>
                <td>{{$departamento->codigodepa}}</td>
                <td>{{$departamento->descripcion}}</td>
                <td>
                    <form action="{{ route('departamento.delete',$departamento->codigodepa) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" onclick="return confirm('¿Quieres Eliminar?')" value="eliminar">
                    </form></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
