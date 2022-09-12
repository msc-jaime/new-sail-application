@extends('layouts.app')

@section('subtitle', '- Mostrar')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>Columna </th>
                <th>Valor </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>Id:</th>
                <td>{{ $ruta->id_conductor }} </td>
            </tr>
            <tr>
                <th>Documento:</th>
                <td>{{ $ruta->id_vehiculo }} </td>
            </tr>
            <tr>
                <th>Nombre:</th>
                <td>{{ $ruta->origen }}</td>
            </tr>

            <tr>
                <th>Celular:</th>
                <td>{{ $ruta->destino }}</td>
            </tr>
            <tr>
                <th>Email:</th>
                <td>{{ $ruta->fecha_salida }}</td>
            </tr>
            <tr>
                <th>Fecha de nacimiento:</th>
                <td>{{ $ruta->fecha_llegada }}</td>
            </tr>
            <tr>
                <th>Created at:</th>
                <td>{{ $ruta->created_at }}</td>
            </tr>
            <tr>
                <th>Updated at:</th>
                <td>{{ $ruta->updated_at }}</td>
            </tr>
        </tbody>
    </table>
    
    <a href="{{ route('ruta.index') }}" class="btn btn-secondary">Regresar</a>
@endsection
