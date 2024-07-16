<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_CSS/estilo.css">
    <title>Aula 08 - Integração HTML5 + PHP</title>
</head>
<body>
    <div>
        <?php
            $valor = $_GET["v"];
            $raiz = sqrt($valor);
            echo "A raiz de $valor é ".number_format($raiz, 2);
        ?>
        <a href="index.html">Voltar</a>
    </div>
</body>
</html>
