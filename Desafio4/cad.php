<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Desafio3</title>
</head>

<body>
    <header>
        <h1>Conversor de Moedas v1.0</h1>
    </header>
    <main>
        <?php

        $saldo = $_GET["saldo"] ?? 0;

        //Parametrização da api
        $inicio = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");

        //Variavel que recebe a api
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        //Variavel que para interpretar o json e receber com os dados em array True
        $dados = json_decode(file_get_contents($url), true);

        //var_dump($dados);

        $cotacao = $dados["value"][0]["cotacaoCompra"];
        $saldoFinal = $saldo / $cotacao;
        //echo "Acotação foi $cotacao";

        //Formatação de moedas
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        //Formatando casas decimais 
        $cotacaoFormatada = number_format($cotacao, 2);

        echo "Seus " . numfmt_format_currency($padrao, $saldo, "BRL") .
            " equivalem a <strong>" .
            numfmt_format_currency($padrao, $saldoFinal, "USD") .
            "</strong> dólares.<br><br>";
        
        echo "Cotação atual:" . numfmt_format_currency($padrao, $cotacaoFormatada, "BRL") . "<br><br>";
        echo "Cotação obtida diretamente do site do <strong>Banco Central do Brasil</strong><br><br>";
        ?>
        <button onclick="javascript:window.location.href='index.html'">Voltar</button>
    </ma>
    
</body>

</html>