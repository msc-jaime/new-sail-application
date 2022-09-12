@extends('layouts.guest')

@section('content')
<div class="container">
    <a href="{{ route('vehiculo.index') }}">Vehiculo</a>
    <a href="{{ route('conductor.index') }}">Conductor</a>
</div>
@endsection
