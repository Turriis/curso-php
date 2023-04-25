<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número aleatorio</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>
        <p>Gerando um número aleatório entre 0 y 100</p>
        <?php
        $numero = mt_rand(0, 100);
        echo "<p>O valor gerado foi <strong>$numero</strong></p>";
        //Hay varios tipo de rand(), el primero es ese, el menos recomendable, el mt_rand() es el mejor y el random_int() es el más seguro pero el más lento, usalo cuando tengas que encriptrar.

        
        ?>  


        <form action="index.php" method="get">
            <label for="submit"></label>
            <input type="submit" value="🔄 Gerar outro">
        </form>

    </main>
</body>

</html>