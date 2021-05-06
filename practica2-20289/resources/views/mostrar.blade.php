@extends('menu.menu')

@section('mostrar', 'mostrar')

@section('contenido')
    <div class="p-1">
        <div class="text-secondary">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center text-blue text-uppercase">
                    <h4>
                        Consulta
                    </h4>
                </div>
            </div>
        </div>
    </div>

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Codigo</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Telefono</th>
            <th scope="col">Direccion</th>
            <th scope="col">Correo Electronico</th>


        </tr>
        </thead>
        <tbody>
        @foreach($formularios as $formulario )
            <tr>
                <td>{{$formulario->idformulario}}</td>
                <td>{{$formulario->nombre}}</td>
                <td>{{$formulario->apellido}}</td>
                <td>{{$formulario->telefono}}</td>
                <td>{{$formulario->direccion}}</td>
                <td>{{$formulario->correo}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <a href="{{route('ingresar')}}" class="btn btn-primary">Ingresar Cliente</a>

@endsection

