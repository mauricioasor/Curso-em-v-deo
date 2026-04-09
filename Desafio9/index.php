<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio9</title>
</head>

<body>
    <main>
        <?php
            $v1 = $_GET['v1'] ?? '';
            $p1 = $_GET['p1'] ?? '';
            $v2 = $_GET['v2'] ?? '';
            $p2 = $_GET['p2'] ?? '';
        ?>
        <h1>Médias Aritméticas</h1>
            <form action="" method="get">
                <label for="v1">1º Valor</label>
                <input type="number" name="v1" id="v1" value="<?= $v1 ?>" min="1" required>
                <label for="p1">1º Peso</label>
                <input type="number" name="p1" id="p1" value="<?= $p1 ?>" min="1" required>
                <label for="v2">2º Valor</label>
                <input type="number" name="v2" id="v2" value="<?= $v2 ?>" min="1" required>
                <label for="p2">2º Peso</label>
                <input type="number" name="p2" id="p2" value="<?= $p2 ?>" min="1" required>
                <input type="submit" value="Calcular Médias">
            </form>
    </main>
    <section>
        <h2>Cálculo das Médias</h2>
            <?php
            $media = ($v1 + $v2) / 2;
            $mediaPond = ((($v1 * $p1) + ($v2 * $p2 )) / ($p1 + $p2));
        
            

            echo "Analisando os valores $v1 e $v2:";
            echo "<ul>
                    <li>A <strong>Média Aritimética Simples</strong> entre os valores é igual a " . number_format($media, 2, ",",".") . "
                    </li><br>
                    <li>A <strong>Média Aritimética Ponderada</strong> com pesos $p1 e $p2 é igual a " . number_format($mediaPond, 2, ",",".") . "
                    </li>";




            ?>
    </section>

</body>

</html>