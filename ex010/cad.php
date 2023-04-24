<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Os dados são:</h1>
    </header>
    <main>
        <?php
        var_dump($_GET);    //Muestra los datos del formulario a través del método get.
        $nom = $_GET['nome'] ?? "Sem nome"; //Los que sigue de los signos de interrogación es para mostrar este string en caso de no recibir el dato, en este caso es el nombre.
        $snome = $_GET['sobrenome'] ?? " Sem sobrenome";

        echo "<p>Você é <strong>$nom $snome</strong>, MUITO PRAZER!</p>";   //Se puede usar html dentro de los strings de echo.
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>

</html>