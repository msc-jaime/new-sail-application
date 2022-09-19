@extends('layouts.app')

@section('subtitle', '- Editar')

@section('content')
    <form action="{{ route('conductor.update', $conductor) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="documento_identificacion" class="form-label">Documento:</label>
            <input id="documento_identificacion" type="text" name="documento_identificacion" class="form-control"
                value='{{ $conductor->documento_identificacion }}'>
            @error('documento_identificacion')
                <div class="text-danger"> {{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <input id="nombre" type="text" name="nombre" class="form-control" value='{{ $conductor->nombre }}'>
            @error('nombre')
                <div class="text-danger"> {{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="celular" class="form-label">Celular:</label>
            <input id="celular" type="text" name="celular" class="form-control" value='{{ $conductor->celular }}'>
            @error('celular')
                <div class="text-danger"> {{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input id="email" type="text" name="email" class="form-control" value='{{ $conductor->email }}'>
            @error('email')
                <div class="text-danger"> {{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="fecha_nacimiento" class="form-label">Fecha de nacimiento:</label>
            <input id="fecha_nacimiento" type="date" name="fecha_nacimiento" class="form-control"
                value='{{ $conductor->fecha_nacimiento }}'>
            @error('fecha_nacimiento')
                <div class="text-danger"> {{ $message }}</div>
            @enderror
        </div>

        <input type="submit" value="Enviar" class="btn btn-primary">
    </form>
    <a href="{{ route('conductor.index') }}" class="btn btn-secondary">Regresar</a>

@endsection
