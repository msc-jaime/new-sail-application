@extends('layouts.app')

@section('subtitle', '- Editar')

@section('content')
    <form action="{{ route('conductor.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="id_conductor" class="form-label">Conductor:</label>
            <input id="id_conductor" type="text" name="id_conductor" class="form-control">
        </div>

        <div class="mb-3">
            <label for="id_vehiculo" class="form-label">Vehiculo:</label>
            <input id="id_vehiculo" type="text" name="id_vehiculo" class="form-control">
        </div>

        <div class="mb-3">
            <label for="origen" class="form-label">Origen:</label>
            <input id="origen" type="text" name="origen" class="form-control">
        </div>

        <div class="mb-3">
            <label for="destino" class="form-label">Destino:</label>
            <input id="destino" type="text" name="destino" class="form-control">
        </div>

        <div class="mb-3">
            <label for="fecha_salida" class="form-label">Fecha de salida:</label>
            <input id="fecha_salida" type="date" name="fecha_salida" class="form-control">
        </div>
        <div class="mb-3">
            <label for="fecha_llegada" class="form-label">Fecha de llegada:</label>
            <input id="fecha_llegada" type="date" name="fecha_llegada" class="form-control">
        </div>

        <input type="submit" value="Enviar" class="btn btn-primary">
    </form>
    <a href="{{ route('conductor.index') }}" class="btn btn-secondary">Regresar</a>
@endsection
