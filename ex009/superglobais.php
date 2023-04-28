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
    <?php 

        //Una superglobal es una variable que podemos usar cuando queramos, siempre estará accesibles para nosotros.

        setcookie('dia-da-semana', 'segunda', time() + 3600);
        session_start();
        $_SESSION["teste"] = 'FUNCIONOU!';
        
        echo "<h1> Superglobal GET</h1>";
        var_dump($_GET);

        echo "<h1>Superglobal POST</h1>";
        var_dump($_POST);

        echo "<h1>Superglobal REQUEST</h1>";
        var_dump($_REQUEST);    //El request va a unificar todo en un array (el GET y POST)

        echo "<h1>Superglobal COOKIE</h1>";
        var_dump($_COOKIE);

        echo "<h1>Superglobal SESSION</h1>";
        var_dump($_SESSION);

        echo "<h1>Superglobal ENV</h1>";
        var_dump($_ENV);

        echo "<h1>Superglobal SERVER</h1>";
       // var_dump($_SERVER);   //Este contiene información sobre archivos, rutas y localizaciones de scripts. Cuando requieras algo de esa información puedes consultarlo aquí.
       //Ejemplo:

       echo $_SERVER['SERVER_NAME']."<br>";     
       echo $_SERVER['PHP_SELF']."<br>";    
       echo $_SERVER['SCRIPT_FILENAME']."<br>"; 
       echo $_SERVER['DOCUMENT_ROOT']."<br>";   
       echo $_SERVER['SERVER_PORT']."<br>"; 
       echo $_SERVER['REMOTE_ADDR']."<br>"; 

        echo "<h1>Superglobal GLOBALS";
        //var_dump($GLOBALS); //Te permite acceder a cualquier variable del script sin importar en donde esté.
        //Estos se almacenan dentro de un array llamado GLOBALS.

        //Ejemplo:

        $x = 5;
        $y = 10;

        function somar(){
            echo nl2br($GLOBALS['x'] + $GLOBALS['y']);

        }
        
        somar();
    ?>
</body>
</html>