@extends('layout')

@section('title', 'Detalle del Producto')

@section('contenido')
<div class="container">
    <h1>{{ $producto->nombre }}</h1>
    <p><strong>Precio:</strong> ${{ number_format($producto->precio, 2) }}</p>
    <p><strong>Stock:</strong> {{ $producto->stock }}</p>
    <p><strong>Descripción:</strong> {{ $producto->descripcion }}</p>
    <p><strong>Categoría:</strong> {{ $producto->categoria->nombre ?? 'Sin categoría' }}</p>

    <a href="{{ route('productos.index') }}" class="btn btn-secondary mt-3">Volver</a>
</div>
@endsection
