@extends('layout')

@section('title', 'Categorías')

@section('contenido')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3">Categorías</h1>

    <a href="{{ route('categorias.create') }}" class="btn btn-custom btn-success-custom">
        Nueva Categoría
    </a>
</div>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if($categorias->count())

<div style="overflow-x:auto;">
    <table>
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
                    <td class="d-flex gap-2 justify-content-center">

                        <a href="{{ route('categorias.edit', $categoria) }}" 
                           class="btn btn-sm btn-warning-custom btn-custom">
                           Editar
                        </a>

                        <form action="{{ route('categorias.destroy', $categoria) }}" method="POST"
                              onsubmit="return confirm('¿Eliminar esta categoría?')">
                            @csrf
                            @method('DELETE')

                            <button type="submit" 
                                class="btn btn-sm btn-danger-custom btn-custom">
                                Eliminar
                            </button>
                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@else
    <p class="text-muted" style="font-style: italic;">No hay categorías aún.</p>
@endif

@endsection

