<pre>
<?php 
    $inicio = date("m-d-Y" , strtotime("-7 days"));
    $fim = date("m-d-Y");
    
    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
    //IMPORTANTE las api's se deben colocar dentro de comillas simples.
    //Cuando salga un error con el subrayado rojo, debes buscar en donde no agrupa los strings (en esta caso las fechas) y debes encerrarlo con la barra invertida \

    $dados = json_decode(file_get_contents($url), true);    //decodifica la API json, el true lo pone dentro de un arreglo, mientras que false lo pone en un objeto.

    //var_dump($dados);

    $cotacao = $dados['value'][0]['cotacaoCompra'];

    echo "A cotação foi de $cotacao";

?>
</pre>


