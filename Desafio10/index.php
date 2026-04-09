<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Desafio10</title>
</head>
<body>
    <main>
        <?php
            $anoNasc = $_GET['ano'] ?? 0;
            $outroAno = $_GET ['outroAno'] ?? 0;
            $anoAtual = date("Y");
        ?>
        <h1>Calculando a sua idade</h1>
        
        <form action="" method="get">
            <label for="ano">Em que ano você nasceu?</label>
            <input type="number" name="ano" id="ano" value="<?= $anoNasc ?>" >
            <label for="outroAno"><?="Quer saber sua idade em que ano? atualmente estamos em <strong>$anoAtual.</strong></label>"?>
            <input type="number" name="outroAno" id="outroAno" value="<?= $outroAno ?>" min="<?=$anoAtual -1?>">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php

    
            if($outroAno != 0){
                 $idade2 = $outroAno - $anoNasc;
                 echo "Quem nasceu em $anoNasc vai ter $idade2 anos em $outroAno";

            }elseif($idade = $anoAtual - $anoNasc){
                echo "Quem nasceu em $anoNasc vai ter $idade anos em $anoAtual";
            }
        ?>


    </section>
    
</body>
</html>