@extends('layout')

@section('title', 'Editar Categoría')

@section('contenido')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="h3">Editar Categoría</h1>
    <a class="btn btn-secondary" href="{{ route('categorias.index') }}">Volver</a>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<form action="{{ route('categorias.update', $categoria) }}" method="POST" class="card p-4">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Nombre</label>
        <input 
            type="text" 
            name="nombre" 
            class="form-control @error('nombre') is-invalid @enderror"
            value="{{ old('nombre', $categoria->nombre) }}"
        >
        @error('nombre')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Descripción</label>
        <textarea 
            name="descripcion" 
            class="form-control @error('descripcion') is-invalid @enderror"
            rows="4"
        >{{ old('descripcion', $categoria->descripcion) }}</textarea>

        @error('descripcion')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Actualizar Categoría</button>
</form>
@endsection