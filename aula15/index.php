<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_CSS/estilo.css">
    <title>Aula 15 - Rotinas PHP - Parte 2</title>
</head>
<body>
    <div>
        <?php
            include "funcoes.php";
            
            $a = 3;
            teste($a);
            echo "<p>O valor de A é <span class='foco'>$a</span></p>";
        ?>
    </div>
</body>
</html>
