<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vehiculo @yield('subtitle', '')</title>
    <!--
    Scripts
    <script src="/build/assets/app.2ef880a3.js" defer></script>
    Styles
    <link href="/build/assets/app.936e35dc.css" rel="stylesheet">
    -->
    @vite('resources/js/app.js')
    
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                @yield('content')
            </div>
            <div class="col-1"></div>
        </div>
    </div>

</html>
