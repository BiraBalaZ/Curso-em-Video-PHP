<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_CSS/estilo.css">
    <title>Aula 12 - Estrutura de Repetição Do While</title>
</head>
<body>
    <div>
        <?php
            $contador = 1;
            do {
                echo "$contador<br>";
                $contador++;
            }
            while ($contador <= 10);
        ?>
    </div>
</body>
</html>
