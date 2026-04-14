<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php 
        
            require_once 'Lampada.php';

            $l1 = new Lampada();
            $l1->setTipo("LED");
            $l1->setTamanho("Média");
            $l1->setMarca("PHILIPS");

            print_r($l1);        
        
        ?>
    </pre>
</body>
</html>