<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    Scripts
    <script src="{{ asset('build/assets/app.2ef880a3.js') }}" defer></script>
    Styles
    <link href="{{ asset('build/assets/app.936e35dc.css') }}" rel="stylesheet">
    
</head>
<body>
    {{ asset('build/assets/app.2ef880a3.js') }}
    {{ asset('build/assets/app.936e35dc.css') }}
    
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Placa</th>
                <th scope="col">Marca</th>
                <th scope="col">Modelo</th>
                <th scope="col">Color</th>
            </tr>
        </thead>
        <tbody>
            
            @foreach ($vehiculos as $vehiculo)
                <tr>
                    <td>{{ $loop->index }}</td>
                    <td>{{ $vehiculo->placa }}</td>
                    <td>{{ $vehiculo->marca }}</td>
                    <td>{{ $vehiculo->modelo }}</td>
                    <td>{{ $vehiculo->color }}</td>
                </tr>
            @endforeach

        </tbody>
    </table>
</body>
</html>

    
