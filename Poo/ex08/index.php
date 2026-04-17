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
            require_once 'Lutador.php';
            require_once 'Luta.php';

            $l = [0.5];
            $l[0] = new Lutador("Pretty boy", "França", 30, 1.75, 68.9, 11, 2, 1);
            $l[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
            $l[2] = new Lutador("Snapshadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
            $l[3] = new Lutador("Dead code", "Austrália", 28, 1.93, 81.6, 13, 0, 2);
            $l[4] = new Lutador("UFOCobol", "Argentina", 37, 1.70, 119.3, 5, 4, 3);
            $l[5] = new Lutador("Nerdaart", "EUA", 30, 1.81, 105.7, 12, 2, 4);

            $UEC = new Luta();
            $UEC->marcarLuta($l[4], $l[5]);
            $UEC->lutar();
            $UEC->marcarLuta($l[1], $l[5]);
            $UEC->lutar();
            
            

            
        ?>
    </pre>
</body>
</html>