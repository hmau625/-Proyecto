@extends('layout')

@section('content')

<div class="container mt-5">

    <h1 class="mb-4">Listado de Productos</h1>

    {{-- Botón para crear nuevo producto --}}
    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('productos.create') }}" 
           class="btn btn-custom btn-success-custom"
           style="background:#7D3C98; color:white;"
           onmouseover="this.style.backgroundColor='#6C2E82'"
           onmouseout="this.style.backgroundColor='#7D3C98'">
            + Nuevo Producto
        </a>
    </div>

    {{-- Mensaje de éxito --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- Tabla --}}
    <div style="overflow-x:auto;">
        <table>
            <thead>
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

                            <a href="{{ route('productos.edit', $producto->id) }}" 
                                class="btn btn-sm btn-warning-custom btn-custom"
                                style="min-width: 80px;">
                                Editar
                            </a>

                            <form action="{{ route('productos.destroy', $producto->id) }}" 
                                  method="POST" 
                                  class="d-inline">
                                @csrf
                                @method('DELETE')

                                <button type="submit" 
                                        class="btn btn-sm btn-danger-custom btn-custom"
                                        onclick="return confirm('¿Eliminar este producto?')">
                                    Eliminar
                                </button>
                            </form>

                        </td>
                    </tr>

                @empty
                    <tr>
                        <td colspan="6" class="text-center text-muted" style="padding:15px;">
                            No hay productos registrados.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>

@endsection
