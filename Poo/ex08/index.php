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

            $l = [0.5];
            $l[0] = new Lutador("Pretty boy", "França", 31, 1.75, 68.9, 11, 3, 1);
            $l[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 50, 14, 2, 3);
            $l[2] = new Lutador("Snapshadow", "EUA", 35, 1.65, 78.8, 2, 2, 7);
            $l[3] = new Lutador("Dead code", "Austrália", 23, 1.98, 80.9, 12, 0, 1);
            $l[4] = new Lutador("UFOCobol", "Argentina", 21, 1.76, 100.9, 1, 2, 1);
            $l[5] = new Lutador("Nerdaart", "EUA", 31, 1.66, 50, 14, 5, 1);

            // $l[3]->perderLuta();
            $l[3]->perderLuta();
            $l[3]->status();
            
        ?>
    </pre>
</body>
</html>