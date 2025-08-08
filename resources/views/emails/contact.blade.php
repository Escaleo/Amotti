<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nuevo contacto</title>
</head>
<body style="font-family: Arial, sans-serif; color:#111;">
    <h2>Nuevo contacto desde el sitio web</h2>
    <p><strong>Nombre:</strong> {{ $nombre ?? '' }}</p>
    <p><strong>Teléfono:</strong> {{ $telefono ?? '' }}</p>
    <p><strong>Email:</strong> {{ $email ?? '' }}</p>
    <p><strong>Web:</strong> {{ $web ?? '-' }}</p>
    @if(!empty($mensaje))
        <p><strong>Mensaje:</strong> {{ $mensaje }}</p>
    @endif
    <hr>
    <p><strong>IP:</strong> {{ $ip ?? '' }}</p>
    <p><strong>Navegador:</strong> {{ $ua ?? '' }}</p>
    <p><strong>Fecha y hora:</strong> {{ $datetime ?? '' }}</p>
</body>
</html>
