<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página de prueba</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <h1>ESTA ES UNA PAGINA DE PRUEBA CON BASE DE DATOS PARA SUBIR A RAILWAY</h1>
    <h1>Lista de Ejemplos</h1>
    <ul>
        @foreach ($ejemplos as $ejemplo)
            <li>No. {{ $ejemplo->id }}</li>
            <li>Nombre: {{ $ejemplo->Apellido }}</li>
            <li>Edad: {{ $ejemplo->edad }}</li>
        @endforeach
    </ul>
</body>
</html>