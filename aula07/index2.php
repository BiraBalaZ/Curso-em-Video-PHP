<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_CSS/estilo.css">
    <title>Aula 07 - Operadores Relacionais</title>
</head>
<body>
    <div>
        <?php
            $a = 3;
            $b = "3";
            $r = ($a == $b)?"SIM":"NÃO";
            echo "As variáveis A e B são iguais? $r";
            
            $r = ($a === $b)?"SIM":"NÃO";
            echo "<br>As variáveis A e B são idênticas? $r";
        ?>
    </div>
</body>
</html>
