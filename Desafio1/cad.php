<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <section>
        <?php
            $numero = $_GET ["numero"] ?? "número inválido";
            $antec = $numero - 1;
            $sucess = $numero + 1;

            echo "O número escolhido foi $numero.<br><br>";
        
            echo "O seu antecessor é $antec. <br><br>";
            
            echo "O seu sucessor é $sucess. <br><br>";
        ?>
        <button onclick="javascript:window.location.href='index.html'">Voltar</button>
    </section>

</body>
</html>