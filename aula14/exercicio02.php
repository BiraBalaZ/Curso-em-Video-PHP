<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_CSS/estilo.css">
    <title>Aula 14 - Rotinas PHP - Parte 1</title>
</head>
<body>
    <div>
        <?php
            function soma($a, $b) {
                return $a+$b;
            }

            $x = 5;
            $y = 8;
            $res = soma($x, $y);
            
            echo "<p>A soma entre <span class='foco'>$x</span> e <span class='foco'>$y</span> é igual à <span class='foco'>$res</span></p>";
        ?>
    </div>
</body>
</html>
