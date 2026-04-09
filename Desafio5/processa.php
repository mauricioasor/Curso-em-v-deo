<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio5</title>
</head>

<body>
    <header>
        <h1>Analisador de Número Real</h1>
    </header>
    <main>
        <?php
        $valor = $_POST["numero"] ?? 0;
        // $valor = str_replace('.', '.', $valor);
        // $valor = str_replace(',', ',', $valor);
        // if (!is_numeric($valor)) {
        //     echo "Valor inválido";
        //     exit;
        // }
        //<a href="index.html">Voltar</a>

        echo "Analisando o número <strong>" . number_format($valor,3, ",", ".") . "</strong> informado pelo usuário: <br><br>";


        $inteiro = (int)$valor;
        $fracao = $valor - $inteiro;

        echo "<ul><li> A parte inteira do número é <strong>" . number_format($inteiro, 0, ",", ".") ."</strong></li><li> A parte fracionária do número é <strong>" . number_format($fracao, 3, ",", ".") ."</strong></li></ul>";
        
        ?>
        <button onclick="javascript:window.location.href='index.html'">Voltar</button>
    </main>

</body>

</html>