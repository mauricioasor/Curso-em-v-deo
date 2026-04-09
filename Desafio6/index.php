<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 6</title>
</head>

<body>
    <?php
    //Capturando os dados do formuçario retroalimentado
    $dividendo = $_GET['dividendo'] ?? 0;
    $divisor = $_GET['divisor'] ?? 0;
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo" min="0" value="<?= $dividendo ?>">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor" min="1" value="<?= $divisor ?>">
            <!-- <input type="reset" value="Limpar"> -->
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Estrutura da Divisão</h2>
        <?php
            if(!isset($_GET['divisor']) || $_GET['divisor'] == 0){
                echo "Impossível dividir, campo vazio ou o valor é igual a zero";
                return;
            }
            
            $resto = $dividendo % $divisor;
            $div = $dividendo / $divisor;

            echo "$dividendo dividido por $divisor é igual a " . (int)$div. "<br><br>";
            echo "$dividendo dividido por $divisor tem um resto de $resto. <br><br>";

            // echo "<ul>";
            // echo "<li>Dividendo: $dividendo</li>";
            // echo "<li>Divisor: $divisor</li>";
            // echo "<li>Quociente: " .(int)$div. "</li>";
            // echo "<li>Resto: $resto</li>";
            // echo "</ul>"; 
        ?>
        <table class="divisao">
            <tr>
                <td><?= $dividendo ?></td>
                <td><?= $divisor ?></td>
            </tr>
            <tr>
                <td><?= $resto ?></td>
                <td><?= (int)$div ?></td>
            </tr>
        </table>

    </section>

</body>

</html>