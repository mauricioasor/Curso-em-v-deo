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
            require_once 'ContaBanco.php';


            $p1 = new ContaBanco();
            $p2 = new ContaBanco();

            $p1->abrirConta("CC", "Jubileu", 4455);
            $p1->depositar(1500);
            $p1->verSaldo();
            $p1->pagarMensal();
            $p1->verSaldo();
            $p1->sacar(1535);
            $p1->fecharConta();
            // $p1->verSaldo();




            $p2->abrirConta("CP", "Maria", 3344);
            $p2->depositar(1700);
            $p2->verSaldo();
            $p2->pagarMensal();
            $p2->verSaldo();
            $p2->sacar(1535);
            $p2->fecharConta();
            $p2->sacar(295);
            $p2->fecharConta();

        

        
        
        ?>


    </pre>
</body>
</html>