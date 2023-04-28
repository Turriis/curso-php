<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Retroalimentado</title>
</head>
<body>
    <?php 
        $valor1 = $_GET['num1'] ?? 3;
        $valor2 = $_GET['num2'] ?? null;
        $total = $valor1 + $valor2 ?? null;
    ?>
    <main>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get"> <!--De ahora en adelante, para que el html agarre los datos del php hay que usarlo así.-->
        <label for="num1">Digite o primeir valor: </label>
        <input type="number" name="num1" id="idnum1" value="<?php echo $valor1 ?>"> <!--En value debes poner el valor inicial, aqui puedes poner el valor que quieras o el valor del php.-->
        <label for="num2">Digito o segundo valor: </label>
        <input type="number" name="num2" id="idnum2" value="2">
        <input type="submit" value="Valorar">
        </form>
        <?php 
            echo 'Seu primeir valor foi ' . $GLOBALS['valor1'];
            echo ' Seu segundo valor foi ' . $GLOBALS['valor2'];
            echo ' Então, a suma dos valores é: ' . $GLOBALS['total'];
        ?>
    </main>
    
</body>
</html>