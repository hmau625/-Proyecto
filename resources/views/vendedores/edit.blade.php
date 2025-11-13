@extends('layout')

@section('title', 'Editar Vendedor')

@section('contenido')
<div class="container mt-4">
    <h1>Editar Vendedor</h1>

    <form action="{{ route('vendedores.update', $vendedor->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $vendedor->nombre }}" required>
        </div>

        <div class="mb-3">
            <label for="cargo" class="form-label">Cargo</label>
            <input type="text" name="cargo" id="cargo" class="form-control" value="{{ $vendedor->cargo }}" required>
        </div>

        <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono</label>
            <input type="text" name="telefono" id="telefono" class="form-control" value="{{ $vendedor->telefono }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('vendedores.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
