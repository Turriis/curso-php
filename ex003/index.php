<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    date_default_timezone_set("America/Mexico_City");   //Cambias la zona horaria de tu programa.
        echo "Hoje é dia " . date("d/m/y ");   //La función date te devuelve una fecha. Ahoram "d" es de dia, "m" de mes y "y" de año
        echo "e a hora atual é " . date("G:i:s");    //"G" es la hora, "i" son los minutos y "s" son los segundos
    ?>
</body>
</html>