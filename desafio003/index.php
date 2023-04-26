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
            <input type="number" name="num" id="idnum" step="0.01"> <!--El step nos permite poner números decimales en el formulario, porqué debe ser 0.01 aún no lo sé-->
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
                echo "<p>Você tem <strong>" . number_format($dolares, 2, ",", ".") . "</strong> dólares :)</p>";    //number_format() le da formato a los valores numéricos que tu le asignes. Primero es la variable a cambiar, cuantos decimales quieres y que formato quieres (representados por el punto y coma).

                $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);    //numfmt_create crea una variable para internacionalizar la moneda que deeses para otros paises lo puedan entender

                echo "<p>Seus " . numfmt_format_currency($padrao, $dinheiro, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolares, "USD</p>");
                //numfmt_format_currency es el procedimiento para internacionalizar la moneda. USA ESTE DE AHORA EN ADELANTE.


            }
            
            ?>
        </p>

    </main>

</body>

</html>