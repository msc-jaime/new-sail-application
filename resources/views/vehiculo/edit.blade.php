@extends('layouts.app')

@section('subtitle', '- Editar')

@section('content')
    <form action="{{ route('vehiculo.update', $vehiculo) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="placa" class="form-label">Placa:</label>
            <input id="placa" type="text" name="placa" class="form-control" value='{{ $vehiculo->placa }}'>
            @error('placa')
                <div class="text-danger"> {{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="marca" class="form-label">Marca:</label>
            <input id="marca" type="text" name="marca" class="form-control" value='{{ $vehiculo->marca }}'>
            @error('marca')
                <div class="text-danger"> {{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="modelo" class="form-label">Modelo:</label>
            <input id="modelo" type="text" name="modelo" class="form-control" value='{{ $vehiculo->modelo }}'>
            @error('modelo')
                <div class="text-danger"> {{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="color" class="form-label">Color:</label>
            <input id="color" type="text" name="color" class="form-control" value='{{ $vehiculo->color }}'>
            @error('color')
                <div class="text-danger"> {{ $message }}</div>
            @enderror
        </div>

        <input type="submit" value="Enviar" class="btn btn-primary">
    </form>
@endsection
