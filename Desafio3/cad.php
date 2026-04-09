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
    <section>
        <?php
        $saldo = $_GET["saldo"] ?? 0;
        $valorDolar = 5.33;
        $saldoFinal = $saldo / $valorDolar;

        //Formatação de moedas
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        echo "Seus " . numfmt_format_currency($padrao, $saldo, "BRL") .
            " equivalem a <strong>" .
            numfmt_format_currency($padrao, $saldoFinal, "USD") .
            "</strong><br><br>";

        echo "<strong>Cotação fixa de $valorDolar informada diretamente no código.</strong><br><br>";
        ?>
    </section>    
        <a href="javascript:history.go(-1)">Voltar</a>
</body>

</html>