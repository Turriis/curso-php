<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisador do número real</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Analisador do número real</h1>
        <form action="index.php" method="get">
            <label for="num">Número real:</label>
            <input type="number" name="num" id="idnum" step="0.0000000001">
            <input type="submit" value="Analisar">
        </form>

        <?php
        $num = $_GET['num'] ?? null;

        if ($num == null) {
            echo null;
        } else {
            $int = intval($num);    //Con eso conviertes el valor a entero.

            $decimal = $num - $int;


            echo nl2br("<p>Analisando o número <strong>$num</strong> informado pelo usúario: \n</p>");

            echo nl2br("<p>A parte inteira do número é <strong>$int</strong> \n</p>");

            echo nl2br("<p>A parte fracionária do número é <strong>$decimal</strong> \n</p>");
        }


        ?>
    </main>

    <h1>&copy;Arturo Ceceña</h1>

</body>

</html>