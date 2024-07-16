<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_CSS/estilo.css">
    <title>Aula 09 - Estrutura Condicional if</title>
</head>
<body>
    <div>
        <?php
            $a = isset($_GET["ano"])?$_GET["ano"]:1900;
            $i = date("Y") - $a;
            echo "Você nasceu em $a e tem $i anos de idade.";

            if ($i < 16) {
                $tipoVoto = "não vota";
            }
            else if (($i >= 16 && $i < 18) || ($i > 65)) {
                $tipoVoto = "voto opcional";
            }
            else {
                $tipoVoto = "voto obrigatório";
            }
            echo "<br>Para essa idade, <strong>$tipoVoto</strong>.";
        ?>
        <a href="index2.html">Voltar</a>
    </div>
</body>
</html>
