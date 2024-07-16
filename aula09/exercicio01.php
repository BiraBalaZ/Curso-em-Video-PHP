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
            $ano = isset($_GET["ano"])?$_GET["ano"]:2000;
            $idade = date("Y") - $ano;

            echo "Você nasceu em $ano, tem $idade anos de idade.<br>";

            if ($idade >= 18 and $idade <= 64) {
                echo "Você é obrigado a votar e pode dirigir";
            } else if ($idade < 16) {
                echo "Você não pode votar nem dirigir";
            } else if ($idade >= 16 and $idade < 18) {
                echo "Você não é obrigado a votar e não pode dirigir";
            } else if ($idade > 64) {
                echo "Você não é mais obrigado à votar mas pode dirigir";
            }
        ?>
        <a href="index.html">Voltar</a>
    </div>
</body>
</html>
