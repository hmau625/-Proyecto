@extends('layout')

@section('title', 'Categorías')

@section('contenido')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="h3">Categorías</h1>
    <a class="btn btn-primary" href="{{ route('categorias.create') }}">Nueva Categoría</a>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

@if($categorias->count())
    <table class="table table-striped align-middle">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categorias as $categoria)
                <tr>
                    <td>{{ $categoria->nombre }}</td>
                    <td>{{ $categoria->descripcion }}</td>
                    <td class="d-flex gap-2">
                        <a class="btn btn-success" href="{{ route('categorias.edit', $categoria) }}">Editar</a>
                        <form action="{{ route('categorias.destroy', $categoria) }}" method="POST" onsubmit="return confirm('¿Eliminar esta categoría?')">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p class="text-muted">No hay categorías aún.</p>
@endif
@endsection
