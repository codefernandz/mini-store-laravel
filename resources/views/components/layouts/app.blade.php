<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Mi Tienda Online' }}</title>

    {{--
        @vite: Carga los archivos compilados por Vite (CSS y JS).
        - En desarrollo usa el servidor de Vite (hot reload).
        - En producción usa los archivos de public/build/. --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="container">
        {{-- Renderiza el encabezado reutilizable --}}
        <x-layouts.header />

        {{-- Inyecta el contenido de cada página --}}
        {{ $slot }}
    </div>
</body>

</html>
