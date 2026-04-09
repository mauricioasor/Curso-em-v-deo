<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota{
            height: 50px;
            margin: 5px;
        }
    </style>
    <title>Desafio13</title>
</head>

<body>
    <main>
        <?php
        $saque = $_GET['sacar'] ?? 0;
        ?>

        <h1>Caixa Eletrônico</h1>
        <form action="" method="get">
            <label for="sacar">Qual valor você deseja sacar? (R$)<sup>*</sup></label>
            <input type="number" name="sacar" id="sacar"  min="1" value="<?= $saque ?>" >
            <p>Notas disponíveis: R$100, R$50, R$10 e R$5,00</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <?php
    $resto = $saque;
    // Saque de R$100
    $saque100 = intdiv($resto, 100);
    $resto %= 100;

    // Saque de R$100
    $saque50 = intdiv($resto, 50);
    $resto %= 50;

    // Saque de R$20
    $saque20 = intdiv($resto, 20);
    $resto %= 20;

    // Saque de R$10
    $saque10 = intdiv($resto, 10);
    $resto %= 10;

    // Saque de R$5
    $saque5 = intdiv($resto, 5);
    $resto %= 5;

    // Saque de R$2
    $saque2 = intdiv($resto, 5);
    $resto %= 2;

    // Saque de 1R$
    $saque1 = intdiv($resto, 1);
    $resto %= 1;


    ?>

    <section>
        <h2>Saque de R$ <?= number_format($saque, 2, ',', '.') ?> realizado!</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>

            <li><img src="imgs/100-reais.jpg" alt="Nota de 100" class="nota"> X <?= $saque100 ?></li>
            <li><img src="imgs/50-reais.jpg" alt="Nota de 50" class="nota"> X <?= $saque50 ?></li>
            <li><img src="imgs/20-reais.jpg" alt="Nota de 20" class="nota"> X <?= $saque20 ?></li>
            <li><img src="imgs/10-reais.jpg" alt="Nota de 10" class="nota"> X <?= $saque10 ?></li>
            <li><img src="imgs/5-reais.jpg" alt="Nota de 5" class="nota"> X <?= $saque5 ?></li>
            <li><img src="imgs/2-reais.jpg" alt="Nota de 2" class="nota"> X <?= $saque2 ?></li>
            <li><img src="imgs/1-real.jpg" alt="Nota de 1" class="nota"> X <?= $saque1 ?></li>
        </ul>

    </section>
</body>

</html>