@extends('layouts.app')
@section('subtitle', '- Home')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Documento</th>
                <th scope="col">Nombre</th>
                <th scope="col">Celular</th>
                <th scope="col">Email</th>
                <th scope="col">Fecha de nacimiento</th>
                <th scope="col" class="text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            
            @foreach ($conductores as $conductor)
                <tr>
                    <td>{{ $conductor->documento_identificacion }}</td>
                    <td>{{ $conductor->nombre }}</td>
                    <td>{{ $conductor->celular }}</td>
                    <td>{{ $conductor->email }}</td>
                    <td>{{ $conductor->fecha_nacimiento }}</td>
                    <td class="align-middle">
                        <!--
                            <i class="bi bi-pencil-square"></i>
                            -->
                        <div class="d-flex justify-content-center">
                            <a href="{{ route('conductor.edit', $conductor) }}" class="btn btn-warning btn-sm">
                                <i class="bi bi-pencil-square h4"></i>
                            </a>

                            <form id="conductor-delete" method="post" action="{{ route('conductor.delete', $conductor) }}">
                                @method('delete')
                                @csrf
                                <!-- <button type="submit">Delete</button> -->
                                <a href="#" class="btn btn-danger btn-sm"
                                    onclick="document.forms['conductor-delete'].submit();">
                                    <i class="bi bi-trash h4"></i>
                                </a>
                            </form>

                            <a href="{{ route('conductor.show', $conductor) }}" class="btn btn-success btn-sm">
                                <i class="bi bi-receipt h4"></i>
                            </a>
                        </div>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>

    <div class="d-flex">
        {!! $conductores->links() !!}
    </div>
    
    <a href="{{ route('conductor.create') }}" class="btn btn-primary">Crear</a>
    
    {{--
    <a href="{{ route('pdf.createViewPdfVehiculo') }}" class="btn btn-success">PDF</a>
    <a href="{{ route('pdf.createDownloadPdfVehiculo') }}" class="btn btn-success"><i class="bi bi-cloud-download"></i> PDF</a>
    <a href="{{ route('excel.createDownloadExcelVehiculo') }}" class="btn btn-success"><i class="bi bi-cloud-download"></i> EXECEL</a>
    --}}

@endsection
