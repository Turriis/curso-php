<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moedas</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Conversor de Moedas</h1>
        <form action="index.php" method="get">
            <div id="label">
                <label for="num">Quantos R$ você tem na carteira?</label>
            </div>
            <input type="number" name="num" id="idnum">
            <div id="submit">
                <input type="submit" value="Converter">
            </div>
        </form>
        <p>
            <?php

            $dinheiro = $_GET["num"] ?? null;

            if($dinheiro == null){
                echo null;

            }
            else{
                
                $dolares = $dinheiro * 0.20;
                echo "<p>Você tem <strong>$dolares</strong> dólares :)</p>";


            }
            
            ?>
        </p>

    </main>

</body>

</html>