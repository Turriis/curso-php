<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia de uma divisão</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <main class="conteudo">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
            <h1>Anatomia de uma divisão</h1>
            <div>
                <div>
                    <label for="num1" id="dividendo-label">Dividendo</label>
                </div>
                <div>
                    <input type="number" name="dividendo" id="dividendo-input">
                </div>
            </div>
            <div>
                <div>
                    <label for="num2" id="divisor-label">Divisor</label>
                </div>
                <div>
                    <input type="number" name="divisor" id="divisor-input">
                </div>
            </div>
            <div>
                <input type="submit" value="Analisar" id="submit">
            </div>
        </form>

    </main>
    <div id="espacio">

    </div>
    <div class="conteudo" id="codigo">
        <h2>Estrutura da Divisão</h2>
        <?php
        $dividendo = $_GET['dividendo'] ?? null;
        $divisor = $_GET['divisor'] ?? null;
        if ($dividendo == null || $divisor == null) {
            echo null;
        } else if ($dividendo == null && $divisor == null) {
            echo null;
        } else {
            $total = $dividendo / $divisor ?? null;
            $mod = $total % 2 ?? null;
            $total = intval($total);
            // echo $dividendo ?? null;
            // echo $divisor ?? null;
            // echo intval($total) ?? null;
            // echo $mod ?? null;
        }

        ?>

            
        
        <table id="tabla">
        <tr>
            <th id="bloque1">
            <?php 
                echo $GLOBALS['dividendo'] ?? null;
            ?>
            </th>
            <th id="bloque2">
            <?php 
                echo $GLOBALS["divisor"] ?? null;
            ?>
            </th>
        </tr>
        <tr >
            <th id="bloque4">
            <?php 
                echo $GLOBALS['mod'] ?? null;
            ?>
            </th>
            <th id="bloque3">
            <?php 
                echo $GLOBALS['total'] ?? null;
            ?>
            </th>
        </tr>

        </table>




        
        
        
        
        
        
    </div>
    
</body>

</html>