<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>informe-seu-salario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $salarioPromedio = 1380;
    ?>

     <div id="formulario">
        <h1>Informe seu salário</h1>
        <div>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
                <label for="salario"><b>Salário (R$):</b></label>
                <input type="number" name="salario" id="salario-id" value="" step="0.01">
                <p>Considerando o salário mínimo de <b><?= number_format($salarioPromedio, 2, ",", ".")?></b></p>
                <input type="submit" value="Calcular">
            </form>
        </div>
    </div>
    <div id="espacio">

    </div>

    <div id="resultado">
        <h2>Resultado Final</h2>
        
        <?php 
            $salarioUsuario = $_GET['salario'] ?? null;
            if($salarioUsuario == null){
                echo '';

            }
            else{
                $salarioTotal = $salarioUsuario / $salarioPromedio;
                $estimado = $salarioUsuario % $salarioPromedio;
                echo "Quem recebe un salário de <b>$salarioUsuario</b> ganha <b>" . intval($salarioTotal) . "</b> + <b>R$ " . $estimado . "</b>";

            }
        
            
        ?>
    </div>
        
</body>
</html>