<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Este es el mensaje enviado por email -->
    <h1>Practicando enviar un correo</h1>
    <p>Mandado por laravle</p>

    <p><strong>Nombre: </strong>{{$contacto["name"]}}</p>
    <p><strong>Correo: </strong>{{$contacto["correo"]}}</p>
    <p><strong>Mensaje: <br></strong>{{$contacto["mensaje"]}}</p>

</body>
</html>
