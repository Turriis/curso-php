<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<header class="conteudo">
    
</header>
<body>
    
    <main class="conteudo">
    <h1>O resultado é: </h1>
    <?php 
        $numero = $_GET['num'];
        $aumento = $numero + 1;
        $desaumento = $numero - 1;
        echo "O número escolhido foi <strong>$numero</strong>";
        echo nl2br("\nO seu antecessor é <strong>$desaumento</strong> ");
        echo nl2br("\nO seu sucessor é <strong>$aumento</strong>\n");
        
    ?>
    <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
    
    
</body>
</html>