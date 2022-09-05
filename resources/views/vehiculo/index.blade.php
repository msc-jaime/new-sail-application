@extends('layouts.app1')
@section('subtitle', '- Home')

@section('content')

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Placa</th>
                <th scope="col">Marca</th>
                <th scope="col">Modelo</th>
                <th scope="col">Color</th>
                <th scope="col" class="text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vehiculos as $vehiculo)
                <tr>
                    <td>{{ $vehiculo->placa }}</td>
                    <td>{{ $vehiculo->marca }}</td>
                    <td>{{ $vehiculo->modelo }}</td>
                    <td>{{ $vehiculo->color }}</td>
                    <td class="align-middle">
                        <!--
                            <i class="bi bi-pencil-square"></i>
                            -->
                        <div class="d-flex justify-content-center">
                            <a href="{{ route('vehiculo.edit', $vehiculo) }}" class="btn btn-warning btn-sm">
                                <i class="bi bi-pencil-square h4"></i>
                            </a>

                            <form id="vehiculo-delete" method="post" action="{{ route('vehiculo.delete', $vehiculo) }}">
                                @method('delete')
                                @csrf
                                <!-- <button type="submit">Delete</button> -->
                                <a href="#" class="btn btn-danger btn-sm"
                                    onclick="document.forms['vehiculo-delete'].submit();">
                                    <i class="bi bi-trash h4"></i>
                                </a>
                            </form>

                            <a href="{{ route('vehiculo.show', $vehiculo) }}" class="btn btn-success btn-sm">
                                <i class="bi bi-receipt h4"></i>
                            </a>
                        </div>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>

    <div class="d-flex">
        {!! $vehiculos->links() !!}
    </div>


    <a href="{{ route('vehiculo.create') }}" class="btn btn-primary">Crear</a>
@endsection
