<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcções matemáticas</title>
</head>

<body>
    <?php
    $string = "2" + "2";
    var_dump($string);  //Cuando se hace la suma de 2 strings, el resultado será la suma de los 2 strings, convirtiendolos a un valor entero.

    $r = abs(-500);  //Te da el valor absoluto, osease no cuenta si es positivo o negativo
    echo $r;

    $r2 = base_convert(254, 10, 16); //Convierte el resultado ya sea en hexadecimal, octal o binario. Nosé porque se ponen esos números más que el último se decide el tipo de dato a convertir.

    echo $r2 . " --- ";

    $r3 = intdiv(5, 2);     //Te hace la división, redondeando el resultado a entero
    echo $r3 . " --- ";

    $r4 = min(2, 5, 1, 6, 4);   //Muestra el valor mínimo de una secuencia
    echo $r4 . " --- ";

    $r5 = max(2, 5, 1, 6, 4);   //Muestra el valor mínimo de una secuencia
    echo $r5 . " --- ";

    $r6 = pi(); //Te muestra el valor de PI. Para que sea constante debes ser M_PI. CUIDADO CON LAS LETRAS MAYÚSCULAS Y MINÚSCULAS
    echo $r6 . " --- ";

    $r7 = pow(3, 2);    //Te da la potencia de un valor al que tu desees.
    echo $r7 . " --- ";

    //También, para no escribir todos, existen las funciones de sin(), cos() y tan()

    $r8 = sqrt(64);   //Te permite calcular la raíz cuadrada de un valor.
    echo $r8;
    ?>
</body>

</html>