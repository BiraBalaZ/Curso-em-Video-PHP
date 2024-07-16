<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_CSS/estilo.css">
    <title>Aula 06 - Operadores de Atribuição</title>
</head>
<body>
    <div>
        <?php
            // $a = 1;
            // $b = 3;
            // $c = $a + $b;
            // $c = $c + 5; // ou $c += 5
            // $b += $a;
            // $a += 1;     // ou $a++
            // $c++;

            $preco = $_GET["p"];
            echo "O preço do produto é R$ ".number_format($preco, 2);
            // $preco = $preco + ($preco*10/100);
            $preco -= $preco*10/100;
            echo "<br>O preço com 10% de desconto é de R$ ".number_format($preco, 2);
        ?>
    </div>
</body>
</html>
