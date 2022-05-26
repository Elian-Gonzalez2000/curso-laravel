<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>
    <style>
        .active{
            color:red;
            font-weidth: bold;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <!--
        Este archivo es una plantilla, debe hacerse para tener contenido repetitivo que se necesitara en diferentes vistas.
        El nombre de la plantilla debe tener .blade.php para funcionar
     -->
    @include("layouts.partials.header")

@yield("content");
</body>
</html>
