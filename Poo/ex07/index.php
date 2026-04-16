<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
    <pre>
        <?php 
            require_once 'ControleRemoto.php';
            
            $c1 = new ControleRemoto();
            $c1->ligar();
            $c1->maisVolume();
            $c1->abrirMenu();
            
        
        ?>
    </pre>
</html>
