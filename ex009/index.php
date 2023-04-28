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
    <main>
        <form action="superglobais.php?tipo=Aluno&turno=Noite" method="post"> <!--El ?tipo=Aluno&turno=Noite lo marcará como GET-->
            <label for="usu">Usuario</label>
            <input type="text" name="usu" id="usu">
            <label for="sen">Senha</label>
            <input type="password" name="sen" id="">
            <!--Cabe recalcar que el metodo POST NO ES SEGURO, es decir, no puede encriptar contraseñas-->
            <input type="submit" value="Entrar">
        </form>
    </main>
</body>
</html>