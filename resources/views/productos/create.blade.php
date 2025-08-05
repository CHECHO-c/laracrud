@extends('layouts.app')
@section('content')
<div class="container">
     <h1>Crear Producto</h1>
     <form action="{{ route('productos.store') }}" method="POST">
        @include('productos.form')
     </form>
</div>

@endsection