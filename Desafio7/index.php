<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 7</title>
</head>

<body>
    <main>
        <?php
        $salario = $_GET['salario'] ?? 0;
        $salMin = 1_380.60;
        //Formatação de moedas
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        ?>

        <h1>Informe o seu salário</h1>
        <form action="" method="get">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" id="salario" value="<?= $salario ?>" step="0.01">
            echo<?= "<p>Considerando o salário mínimo de <strong>" . numfmt_format_currency($padrao, $salMin, "BRL") . "</strong></p>  " ?>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>

        <?php
        if (!isset($_GET['salario']) || $_GET['salario'] == 0) {
            echo "Impossível calcular, campo vazio ou o valor é igual a zero";
            return;
        }
        $qtdSal = intdiv($salario, $salMin);
        $restoSal = $salario % $salMin;

        if ($salario < $salMin) {
            echo "O seu salário esta abaixo do mínino, você recebe apenas " . numfmt_format_currency($padrao, $salario, "BRL") . "";
        } elseif ($restoSal == 0) {
            echo "Quem recebe um salario de " . numfmt_format_currency($padrao, $salario, "BRL") . " ganha " . number_format($qtdSal, 0) . " salário mínimo apenas.";
        } else {
            echo "Quem recebe um salario de " . numfmt_format_currency($padrao, $salario, "BRL") . " ganha " . number_format($qtdSal, 0) . " salários mínimos + " . numfmt_format_currency($padrao, $restoSal, "BRL") .  "";
        }


        ?>
    </section>


</body>

</html>