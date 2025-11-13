@extends('layout')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Listado de Productos</h1>

    {{-- Botón para crear nuevo producto --}}
    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('productos.create') }}" class="btn btn-primary">
            + Nuevo Producto
        </a>
    </div>

    {{-- Mensaje de éxito --}}
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- Tabla --}}
    <div class="table-responsive">
        <table class="table table-striped table-bordered align-middle">
            <thead class="table-dark text-center">
                <tr>
                    <th>Nombre</th>
                    <th>Categoría</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($productos as $producto)
                    <tr>
                        <td>{{ $producto->nombre }}</td>
                        <td>{{ $producto->categoria->nombre ?? 'Sin categoría' }}</td>
                        <td>{{ $producto->descripcion }}</td>
                        <td>${{ number_format($producto->precio, 2) }}</td>
                        <td>{{ $producto->stock }}</td>
                        <td class="text-center">
                            <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar este producto?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center text-muted">No hay productos registrados.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection

