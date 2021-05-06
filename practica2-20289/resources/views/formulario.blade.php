@extends('menu.menu')

@section('formulario','menu')

@section('contenido')
    <div class="p-1">
        <div class="text-secondary">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center text-blue text-uppercase">
                    <h4>
                        Formulario
                    </h4>
                </div>
            </div>
        </div>
        <div class="p-5">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (\Session::has('success'))
                <div class="alert alert-success">
                    <ul>
                        <li>{!! \Session::get('success') !!}</li>
                    </ul>
                </div>
            @endif

            @if(\Session::has('warning'))
                <div class="alert alert-warning">
                    <ul>
                        <li>{!! \Session::get('warning') !!}</li>
                    </ul>
                </div>
            @endif

            <form action="{{route('guardar')}}" method="POST">
                @csrf
                @method('POST')

                <div class="row">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label>Codigo</label>
                            <input type="text" name="codigo" id="codigo" maxlength="13" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label>nombre</label>
                            <input type="text" name="nombre" class="form-control" >
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label>apellido</label>
                            <input type="text"  name="apellido" class="form-control" >
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label>telefono</label>
                            <input type="text"  name="telefono" class="form-control" >
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label>direccion</label>
                            <input type="text"  name="direccion"class="form-control" >
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label>correo</label>
                            <input type="text"  name="correo" class="form-control" >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 offset-3">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <a href="{{route('mostrar')}}" class="btn btn-danger">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>

    </div>
@endsection
