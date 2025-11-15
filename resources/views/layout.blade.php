<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        /* ======== DARK MODE GLOBAL ======== */
        body {
            background: #121212;
            color: #E0E0E0;
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
        }

        /* ======== NAVBAR ======== */
        .navbar {
            background: #1F1F1F !important;
            border-bottom: 1px solid #2A2A2A;
            padding: 12px 20px;
        }

        .navbar-brand {
            color: #00E5A4 !important;
            font-weight: 700;
        }

        .nav-link {
            color: #E0E0E0 !important;
            font-weight: 500;
            transition: 0.3s;
        }

        .nav-link:hover {
            color: #00E5A4 !important;
        }

        /* ======== TITULOS ======== */
        h1, h2, h3, h4 {
            color: #FFFFFF;
            font-weight: 700 !important;
        }

        /* ======== BOTONES GENERALES ======== */
        .btn-custom {
            border-radius: 10px;
            font-weight: 600;
            padding: 8px 20px;
            transition: 0.25s;
        }

        .btn-success-custom {
            background: #00C97A;
            color: white;
        }
        .btn-success-custom:hover {
            background: #00A564;
        }

        .btn-warning-custom {
            background: #E3B505;
            color: #111;
        }
        .btn-warning-custom:hover {
            background: #C99D04;
        }

        .btn-danger-custom {
            background: #D84343;
            color: white;
        }
        .btn-danger-custom:hover {
            background: #B73737;
        }

        /* ======== TABLAS ======== */
        table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0 12px;
        }

        thead tr {
            background: #1F1F1F;
            color: #00E5A4;
        }

        thead th {
            padding: 14px;
            font-weight: 600;
            text-align: center;
        }

        tbody tr {
            background: #1A1A1A;
            color: #E0E0E0;
            transition: 0.25s;
        }

        tbody tr:hover {
            background: #232323;
        }

        tbody td {
            padding: 14px;
            text-align: center;
        }

        tbody tr {
            box-shadow: 0 4px 10px rgba(0,0,0,0.4);
            border-radius: 8px;
        }

        /* ====== ALERTAS ====== */
        .alert-success {
            background: #003C1B;
            color: #7CFFBD;
            border: 1px solid #0F5A33;
            border-radius: 10px;
        }

    </style>
</head>

<body>

    {{-- Barra superior --}}
    <nav class="navbar navbar-expand-lg">
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

    {{-- Contenido dinámico --}}
    <main class="py-5">
        @if(View::hasSection('content'))
            @yield('content')
        @elseif(View::hasSection('contenido'))
            @yield('contenido')
        @else
            <div class="container"><p class="text-muted">Nada para mostrar.</p></div>
        @endif
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
