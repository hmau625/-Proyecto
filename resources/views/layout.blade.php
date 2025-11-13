<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    {{-- Barra superior --}}
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('productos.index') }}">Productos</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMain">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navMain">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="{{ route('vendedores.index') }}" class="nav-link">Vendedores</a></li>
                    <li class="nav-item"><a href="{{ route('categorias.index') }}" class="nav-link">Categorías</a></li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Aquí se carga el contenido de cada vista: soportamos 'content' y 'contenido' --}}
    <main class="py-5">
        @if(View::hasSection('content'))
            @yield('content')
        @elseif(View::hasSection('contenido'))
            @yield('contenido')
        @else
            {{-- sección por defecto --}}
            <div class="container"><p class="text-muted">Nada para mostrar.</p></div>
        @endif
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
