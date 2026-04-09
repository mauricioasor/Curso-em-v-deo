<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 8</title>
</head>

<body>
    <main>
        <?php
        $numero = $_GET['numero'] ?? 0;
        ?>


        <h1>Informe um número (calculo de raizes)</h1>
        <form action="" method="get">
            <label for="numero">Número</label>
            <input type="number" name="numero" id="numero" value="<?= $numero ?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section>
        <h2>Resultado final</h2>
        <?php
        $raiz = sqrt($numero);
        $raizCub = pow($numero, 1 / 3);

        echo "Analisando o <strong>número $numero</strong>, temos: <br>";

        echo "<ul><li>A sua raiz quadrada é " . (number_format($raiz, 2, ",",".")) . "</li><br><li>A sua raiz cúbica é " . number_format($raizCub, 2, ",",".") . "</li></ul><br>";

        ?>


    </section>
















</body>

</html>