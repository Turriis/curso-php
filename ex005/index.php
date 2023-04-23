<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Teste de valores primitivos
    </h1>
    <?php 
        //0x = hexadecimal, 0b = binario e 0 = octal. Se pueden escribir números hexadecimales, binarios y octales directamente en php.
        $num = 0b0110;
        echo "O número digitado é $num";

        $v = 'Arturo';

        var_dump($v);   //Ele vai a mostrar o tipo de dado e mais detalhes dele.

        $ex = (int) 3e2;    //Você pode forçar a mudar o tipo de valor dele. Agora não é um float, agora mudo a int.
        var_dump($ex);

        $ex2 = (int) "950";
        var_dump($ex2);

        $casado = true;

        echo "O valor de casado é $casado"; //Ele não vai a mostrar nada porque php acha que a varavel tâ vazia sim é false, solamente mostrará um 1 sim é true.

        $array = [1, 6, "xd", 89, 2.7, true, null];
        var_dump($array);   //Ele não vai a mostrar nada com um echo, precisa ser um var_dump.
        //Igualmete como a maioria de os lenguagems de programação, o primer valor do array é 0, despois 1, 2, etc.
        //Tambem, você pode mexer varios tipos de dados.

        class Pessoa {
            private string $nome;

        }   //É um objeto

        $p = new Pessoa;
        var_dump($p);
    ?>
</body>
</html>