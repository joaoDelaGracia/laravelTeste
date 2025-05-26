<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} - Controle de Séries</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body>
    <h1 class="">{{ $title }} </h1>
    <button class="btn btn-primary">Teste</button>
    {{ $slot }}
</body>
</html>