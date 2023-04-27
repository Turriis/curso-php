<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor R$ a USD$</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Conversor R$ a USD$</h1>
        <form action="index.php" method="get">
            <label for="num">Digite os R$ que você tem na carteira</label>
            <div id="idtexto">
                <input type="text" name="num" id="idnum" step="0.01">
            </div>
            <div id="idsubmit">
                <input type="submit" value="Convertir">
            </div>

        </form>


        <?php
        $inicio = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");

        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        //IMPORTANTE las api's se deben colocar dentro de comillas simples.
        //Cuando salga un error con el subrayado rojo, debes buscar en donde no agrupa los strings (en esta caso las fechas) y debes encerrarlo con la barra invertida \

        $dados = json_decode(file_get_contents($url), true);    //decodifica la API json, el true lo pone dentro de un arreglo, mientras que false lo pone en un objeto.

        //var_dump($dados);

        $cotacao = $dados['value'][0]['cotacaoCompra'];




        $reales = $_GET['num'] ?? null;

        if ($reales == null) {
            echo null;
        } else {
            $dolares = $reales / $cotacao;

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<p>Seus <strong>" . numfmt_format_currency($padrao, $reales, "BRL") . "</strong> equivalem a <strong>" . numfmt_format_currency($padrao, $dolares, "USD</p></strong>");
        }
        ?>
    </main>
</body>
</html>