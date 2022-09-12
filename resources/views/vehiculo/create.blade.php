@extends('layouts.app')

@section('subtitle', '- Editar')

@section('content')
    <form action="{{ route('vehiculo.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="placa" class="form-label">Placa:</label>
            <input id="placa" type="text" name="placa" class="form-control">
        </div>

        <div class="mb-3">
            <label for="marca" class="form-label">Marca:</label>
            <input id="marca" type="text" name="marca" class="form-control">
        </div>

        <div class="mb-3">
            <label for="modelo" class="form-label">Modelo:</label>
            <input id="modelo" type="text" name="modelo" class="form-control">
        </div>

        <div class="mb-3">
            <label for="color" class="form-label">Color:</label>
            <input id="color" type="text" name="color" class="form-control">
        </div>
        <input type="submit" value="Enviar" class="btn btn-primary">
    </form>
    <a href="{{ route('vehiculo.index') }}" class="btn btn-secondary">Regresar</a>
@endsection
