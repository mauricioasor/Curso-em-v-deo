<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio11</title>
</head>

<body>
    <main>
        <?php
        $preco = $_GET['preco'] ?? 0;
        $reaj = $_GET['reaj'] ?? 0;
        

        ?>
        <h1>Reajustador de Preços</h1>
        <form action="" method="get">
            <label for="preco">Preço do Produto (R$):</label>
            <input type="number" name="preco" id="preco" value="<?= $preco ?>" min="0.10" step="0.01">
            <label for="reaj">Qual será o percentual de reajuste? (<strong><span id="p">?</span>%</strong>)</label>
            <input type="range" name="reaj" id="reaj" min="0" max="100" step="1" oninput="mudaValor()" value="<?= $reaj?>">
            <input type="submit" value="Reajustar">
        </form>
    </main>
        <?php 
            $aumento = ($preco * $reaj) / 100;
            $novoPreco = $preco + $aumento
        ?>
        <section>
            <h2>Resultado do Reajuse</h2>
            <p>O produto que custava R$ <?=number_format($preco, 2, ',','.')?> com <strong><?= $reaj ?>% de aumento</strong> vai passar a custar <strong><?= number_format($novoPreco, 2, ',','.') ?></strong> a partir de agora.</p>
        </section>
    <script>
        mudaValor()


        function mudaValor() {
            p.innerText = reaj.value;
        }
    </script>
</body>

</html>