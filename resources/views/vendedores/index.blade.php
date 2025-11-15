@extends('layout')

@section('title', 'Lista de Vendedores')

@section('contenido')

<div class="container mt-5">

    <h1 class="mb-4">Vendedores</h1>

    <a href="{{ route('vendedores.create') }}" 
       class="btn btn-custom btn-success-custom mb-3"
       style="background:#00D0A0;"
       onmouseover="this.style.backgroundColor='#0FA688'"
       onmouseout="this.style.backgroundColor='#00D0A0'">
       Nuevo Vendedor
    </a>

    <div style="overflow-x:auto;">

        <table>
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

                        <td class="text-center">

                            <a href="{{ route('vendedores.edit', $vendedor->id) }}" 
                               class="btn btn-sm btn-warning-custom btn-custom"
                               style="min-width: 80px;">
                               Editar
                            </a>

                            <form action="{{ route('vendedores.destroy', $vendedor->id) }}" 
                                  method="POST" 
                                  class="d-inline">
                                @csrf
                                @method('DELETE')

                                <button type="submit" 
                                        class="btn btn-sm btn-danger-custom btn-custom"
                                        onclick="return confirm('¿Seguro que quieres eliminar este vendedor?')">
                                    Eliminar
                                </button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>

    </div>

</div>

@endsection
