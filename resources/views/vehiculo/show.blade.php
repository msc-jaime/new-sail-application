@extends('layouts.app1')

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
                <td>{{ $vehiculo->id }} </td>
            </tr>
            <tr>
                <th>Placa:</th>
                <td>{{ $vehiculo->placa }}</td>
            </tr>

            <tr>
                <th>Marca:</th>
                <td>{{ $vehiculo->marca }}</td>
            </tr>
            <tr>
                <th>Modelo:</th>
                <td>{{ $vehiculo->modelo }}</td>
            </tr>
            <tr>
                <th>Color:</th>
                <td>{{ $vehiculo->color }}</td>
            </tr>
            <tr>
                <th>Created at:</th>
                <td>{{ $vehiculo->created_at }}</td>
            </tr>
            <tr>
                <th>Updated at:</th>
                <td>{{ $vehiculo->updated_at }}</td>
            </tr>
            </tr>
    </table>
    
    <a href="{{ route('vehiculo.index') }}" class="btn btn-secondary">Regresar</a>
@endsection
