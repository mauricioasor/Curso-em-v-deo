<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 12</title>
</head>

<body>
    <main>
        <?php
        $segundos = $_GET['segundos'] ?? 0;
        ?>
        <h1>Calculadora de Tempo</h1>
        <form action="" method="get">
            <label for="segundos">Qual é o total de segundos?</label>
            <input type="number" name="segundos" id="segundos" value="<?= $segundos ?>" min="0" step="1" required>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Totalizando tudo</h2>
        <?php
        $semanas = intdiv($segundos, 604800);
        $segundos %= 604800;

        $dias = intdiv($segundos, 86400);
        $segundos %= 86400;

        $horas = intdiv($segundos, 3600);
        $segundos %= 3600;

        $minutos = intdiv($segundos, 60);
        $segundos %= 60;


        echo "Analisando o valor que você digitou $segundos segundos equivalem a um total de: <br><br>";
        echo "<ul>
                        <li>$semanas semanas</li>
                        <li>$dias dias</li>
                        <li>$horas horas</li>
                        <li>$minutos minutos</li>
                        <li>$segundos segundos</li>
                    </ul>";


        ?>
    </section>

</body>

</html>