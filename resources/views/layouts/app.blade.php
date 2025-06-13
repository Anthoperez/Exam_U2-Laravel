<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Examen_U2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <!-- Encabezado principal -->
    <header class="bg-primary text-white py-4 shadow-sm mb-4">
        <div class="container text-center">
            <h1 class="h3 mb-0">Sistema de Registro de Alumnos</h1>
        </div>
    </header>

    <!-- Menú de navegación -->
    <nav class="bg-white shadow-sm mb-4">
        <div class="container">
            <ul class="nav justify-content-center nav-pills py-2">
                <li class="nav-item">
                    <a class="nav-link text-dark fw-bold" href="#">Alumnos Registrados</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark fw-bold" href="{{ route('alumnos.create') }}">Registrar Alumno</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark fw-bold" href="{{ route('alumnos.index') }}">Listado de Alumnos</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Contenido principal -->
    <main class="container">
        @yield('content')
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
