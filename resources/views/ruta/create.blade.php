@extends('layouts.app')

@section('subtitle', '- Editar')

@section('content')
    <form action="{{ route('ruta.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="id_conductor" class="form-label">Conductor:</label>
            <select id="id_conductor" name="id_conductor" class="form-select">
                <option selected>Open this select menu</option>
                @foreach ($conductors as $conductor)
                    <option value="{{$conductor->id}}">{{ $conductor->documento_identificacion . " - " . $conductor->nombre}}</option>
                @endforeach
            </select>
            @error('id_conductor')
                <div class="text-danger"> {{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="id_vehiculo" class="form-label">Vehiculo:</label>
            <select id="id_vehiculo" name="id_vehiculo" class="form-select">
                <option selected>Open this select menu</option>
                @foreach ($vehiculos as $vehiculo)
                    <option value="{{$vehiculo->id}}">{{ $vehiculo->placa }}</option>
                @endforeach
            </select>
            @error('id_vehiculo')
                <div class="text-danger"> {{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="origen" class="form-label">Origen:</label>
            <input id="origen" type="text" name="origen" class="form-control">
            @error('origen')
                <div class="text-danger"> {{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="destino" class="form-label">Destino:</label>
            <input id="destino" type="text" name="destino" class="form-control">
            @error('destino')
                <div class="text-danger"> {{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="fecha_salida" class="form-label">Fecha de salida:</label>
            <input id="fecha_salida" type="date" name="fecha_salida" class="form-control">
            @error('fecha_salida')
                <div class="text-danger"> {{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="fecha_llegada" class="form-label">Fecha de llegada:</label>
            <input id="fecha_llegada" type="date" name="fecha_llegada" class="form-control">
            @error('fecha_llegada')
                <div class="text-danger"> {{ $message }}</div>
            @enderror
        </div>

        <input type="submit" value="Enviar" class="btn btn-primary">
    </form>
    <a href="{{ route('ruta.index') }}" class="btn btn-secondary">Regresar</a>
@endsection
