@extends('layouts.app')
@section('subtitle', '- Home')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nombre Conductor</th>
                <th scope="col">Placa</th>
                <th scope="col">Origen</th>
                <th scope="col">Destino</th>
                <th scope="col">Fecha de salida</th>
                <th scope="col" class="text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            
            @foreach ($rutas as $ruta)
                <tr>
                    <td>{{ $ruta->id_conductor }}</td>
                    <td>{{ $ruta->id_vehiculo }}</td>
                    <td>{{ $ruta->origen }}</td>
                    <td>{{ $ruta->destino }}</td>
                    <td>{{ $ruta->fecha_salida }}</td>
                    <td>{{ $ruta->fecha_llegada }}</td>
                    <td class="align-middle">
                        <!--
                            <i class="bi bi-pencil-square"></i>
                            -->
                        <div class="d-flex justify-content-center">
                            <a href="{{ route('ruta.edit', $ruta) }}" class="btn btn-warning btn-sm">
                                <i class="bi bi-pencil-square h4"></i>
                            </a>

                            <form id="ruta-delete" method="post" action="{{ route('ruta.delete', $ruta) }}">
                                @method('delete')
                                @csrf
                                <!-- <button type="submit">Delete</button> -->
                                <a href="#" class="btn btn-danger btn-sm"
                                    onclick="document.forms['ruta-delete'].submit();">
                                    <i class="bi bi-trash h4"></i>
                                </a>
                            </form>

                            <a href="{{ route('ruta.show', $ruta) }}" class="btn btn-success btn-sm">
                                <i class="bi bi-receipt h4"></i>
                            </a>
                        </div>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>

    <div class="d-flex">
        {!! $ruta->links() !!}
    </div>
    
    <a href="{{ route('ruta.create') }}" class="btn btn-primary">Crear</a>
    
    {{--
    <a href="{{ route('pdf.createViewPdfVehiculo') }}" class="btn btn-success">PDF</a>
    <a href="{{ route('pdf.createDownloadPdfVehiculo') }}" class="btn btn-success"><i class="bi bi-cloud-download"></i> PDF</a>
    <a href="{{ route('excel.createDownloadExcelVehiculo') }}" class="btn btn-success"><i class="bi bi-cloud-download"></i> EXECEL</a>
    --}}

@endsection
