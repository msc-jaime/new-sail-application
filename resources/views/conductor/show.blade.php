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
                <td>{{ $conductor->id }} </td>
            </tr>
            <tr>
                <th>Documento:</th>
                <td>{{ $conductor->documento_identificacion }} </td>
            </tr>
            <tr>
                <th>Nombre:</th>
                <td>{{ $conductor->nombre }}</td>
            </tr>

            <tr>
                <th>Celular:</th>
                <td>{{ $conductor->celular }}</td>
            </tr>
            <tr>
                <th>Email:</th>
                <td>{{ $conductor->email }}</td>
            </tr>
            <tr>
                <th>Fecha de nacimiento:</th>
                <td>{{ $conductor->fecha_nacimiento }}</td>
            </tr>
            <tr>
                <th>Created at:</th>
                <td>{{ $conductor->created_at }}</td>
            </tr>
            <tr>
                <th>Updated at:</th>
                <td>{{ $conductor->updated_at }}</td>
            </tr>
        </tbody>
    </table>
    
    <a href="{{ route('conductor.index') }}" class="btn btn-secondary">Regresar</a>
@endsection
