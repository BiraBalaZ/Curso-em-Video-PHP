<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_CSS/estilo.css">
    <title>Aula 5 - Operadores Aritméticos</title>
</head>
<body>
    <div>
        <?php
            // index.php?a=4&b=3
            $n1 = $_GET["a"];
            $n2 = $_GET["b"];
            $media = ($n1 + $n2) / 2;

            echo "<h2>Valores recebidos $n1 e $n2</h2>";
            echo "A soma vale ".$n1 + $n2;
            echo "<br>A subtração vale ".$n1 - $n2;
            echo "<br>A multiplicação vale ".$n1 * $n2;
            echo "<br>A divisão vale ".$n1 / $n2;
            echo "<br>A módulo vale ".$n1 % $n2;
            echo "<br>A média vale $media";
        ?>
    </div>
</body>
</html>
