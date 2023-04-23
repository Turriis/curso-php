<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tipos de strings</h1>
    <?php 
        $string1 = "Exemplo ";  //Double quoted/ Aspas duplas.
        $string2 = ' 1 --- ';    //Single quoted / Aspas simples.
        $string3 = $string1 . $string2; //Pra concatenar, é preciso usar o .
        echo "$string1 $string2 ";
        echo "$string3 ";

        //La diferencia entre double quoted y single cuoted es que el de las comillas dobles va a analizar el código y lo va a interpretar.
        //En caso del sigle cuoted, va a plasmar de seco lo que nosotros escribimos.
        
        $ex1 = "php \u{1F418} --- ";  //Muestra el emoji.
        $ex2 =  'php \u{1F418}';   //No muestra el emoji, solamente el código de este.

        echo "Você tâ estudando $ex1";

        //----------------------------------------------------------------------

        const ESTADO = "RJ";
        echo "Moro no estado ESTADO --- ";   //As constantes não vai ser mostradas com duas aspas.
        echo 'Moro no estado ESTADO --- ';   //É o mismo com as aspas simples.
        echo 'Moro no estado ' . ESTADO . "  --- ";    //Solamente com uma concatenação, não importa sim são duas simples ou doubles.

        echo "Estamos no ano de" . date('Y') . ' --- ';

        $nome_lutador = 'Nate';
        $sobrenome_lutador = 'Díaz';

        //echo "$nome_lutador "dont be scared homie" $sobrenome_lutador";  Cuando se quiere poner de nuevo comillas dentro del string, en el caso de las comillas dobles, no pueden
        //haber 2 strings de comillas dobles una dentro de otra, dará error, para eso puedes usar una SECUENCIA DE ESCAPE.

        echo "$nome_lutador 'dont be scared homie' $sobrenome_lutador" . " --- ";     //Comillas simples dentro de comillas dobles es correcto.

        echo "$nome_lutador \"dont be scared homie\" $sobrenome_lutador" . ' --- ';   //Escape de secuencia para poder usar las comillas dobles


        /*Solamente vimos una secuencia de escape, pero hay muchas más:
        
            \n Nova linea
            \t Tabulação horizontal
            \\ Barra invertida
            \$Sinal de cifrão
            \u{} Codepoint Unicode (Caracter especial)
        */

        $curso = 'php';
        $ano = date('Y');
        //-------------------------------------------------------------------------

        //Sintaxis heredoc (Nunca se usa, pero es bueno saberlo).

        echo <<< FRASE
             Estou estudando $curso em $ano.

        FRASE; //En la parte de <<< FRASE, es obligatorio que haya un espacio entre las llaves y la palabra, en este caso, FRASE.

        //-------------------------------------------------------------------------

        //Sintaxis nowdoc (Nunca se usa, pero es bueno saberlo).

        echo <<< 'FRASE'
             Estou estudando $curso em $ano.

        FRASE;

            

    ?>
</body>
</html>