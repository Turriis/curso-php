<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raízes</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
    <div id="formulario">
        <h1>Informe un número</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
            <div>
                <label for="numero">Número</label>
            </div>
            <div class="espacio">

            </div>
            <div>
                <input type="number" name="numero" id="id-numero">
            </div>
            <div class="espacio">

            </div>
            <div>
                <input type="submit" value="Calcular raízes">
            </div>
        </form>
        
    </div>

    <div class="espacio">

    </div>


    <div id="resultado">
        <h2>Resultado final</h2>
        <?php 

            $check = true;
            if($check){
            $numero = $_GET['numero'] ?? false;
            $raiz_cuadrada = (float)  sqrt($numero);
            $raiz_cubica = (float) pow($numero, 1/3);

            echo "Analisando o <b>número $numero</b>, temos: ";
            echo "\n<ol>A sua raiz quadrada é <strong>" . number_format($raiz_cuadrada, 2,'.') . "</strong></ol>";
            echo "\n<ol>A sua raiz cúbica é <strong>" . number_format($raiz_cubica, 2, '.')  . "</strong></ol>";

            }
            else{
                $check = false;
                echo '';
            }

            
        ?>
    </div>
</body>
</html>