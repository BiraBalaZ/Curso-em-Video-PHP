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
            $atual = $_GET["aa"];
            echo "O ano atual é $atual. O ano anterior é ".--$atual;
            echo "<br>O ano sucessor é ".++$atual;
        ?>
    </div>
</body>
</html>
