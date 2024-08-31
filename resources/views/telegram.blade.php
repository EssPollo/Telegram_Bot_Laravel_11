<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boton para Telegram</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .button-container {
            text-align: center;
        }
        .btn-telegram {
            background-color: #0088cc; /* Color de fondo azul */
            color: white; /* Color del texto */
            border: none; /* Sin borde */
            padding: 10px 20px; /* Espaciado */
            text-align: center; /* Alineación del texto */
            text-decoration: none; /* Sin subrayado */
            display: inline-block; /* Mostrar como bloque en línea */
            font-size: 16px; /* Tamaño de fuente */
            margin: 4px 2px; /* Margen */
            cursor: pointer; /* Cambia el cursor a una mano */
            border-radius: 5px; /* Bordes redondeados */
        }
        .btn-telegram:hover {
            background-color: #005f73; /* Color de fondo al pasar el ratón */
        }
    </style>
</head>
<body>
    <div class="button-container">
        <form action="{{ route('telegram.store')}}" method="post">
            @csrf
            <button type="submit" class="btn-telegram">bot de telegram</button>
        </form>
    </div>
</body>
</html>
