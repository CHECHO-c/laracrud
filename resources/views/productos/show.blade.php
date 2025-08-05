@extends('layouts.app')
@section('content')
    <div class="container">
        
        <h1>{{ $producto->nombre  }}</h1>
        <p>{{ $producto->descripcion }}</p>
        <p><strong>Precio</strong>${{ $producto->precio }}</p>
        <a href="{{ route('productos.index') }}" class="btn btn-secondary" >Volver</a>


    </div>

@endsection