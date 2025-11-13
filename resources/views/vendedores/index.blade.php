@extends('layout')

@section('title', 'Lista de Vendedores')

@section('contenido')
<div class="container mt-4">
    <h1>Vendedores</h1>

    <a href="{{ route('vendedores.create') }}" class="btn btn-success mb-3">Nuevo Vendedor</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Cargo</th>
                <th>Teléfono</th>
                @isset($vendedores[0]->correo)
                    <th>Correo</th>
                @endisset
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($vendedores as $vendedor)
                <tr>
                    <td>{{ $vendedor->id }}</td>
                    <td>{{ $vendedor->nombre }}</td>
                    <td>{{ $vendedor->cargo }}</td>
                    <td>{{ $vendedor->telefono }}</td>
                    @isset($vendedor->correo)
                        <td>{{ $vendedor->correo }}</td>
                    @endisset
                    <td>
                        <!-- Botón Editar -->
                        <a href="{{ route('vendedores.edit', $vendedor->id) }}" class="btn btn-primary btn-sm">Editar</a>

                        <!-- Botón Eliminar -->
                        <form action="{{ route('vendedores.destroy', $vendedor->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('¿Seguro que quieres eliminar este vendedor?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
