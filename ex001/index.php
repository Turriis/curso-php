<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Me livrando da maldiçäo</title>
</head>
<body>
    <h1>
        <?php 
            echo "Hola mundo \u{1F30E}"; //Aquí sí se utiliza el punto y coma para cerrar el código.
            //Ademas, con el código que empieza con \u{} plasmé un emoji, esto en la página de: https://emojipedia.org 
            
            
            $exepmlo = "Que pasa manooo";   //Declaración de una variable
            echo "<h3>O meu nome é $exepmlo</h3>";  //Se puede combinar HTML e introducir dentro del string la variable declarada.
        ?>
    </h1>
    <p>Vamos a tentar no livrar da maldição</p>
</body>
</html>