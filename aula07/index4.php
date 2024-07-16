<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_CSS/estilo.css">
    <title>Aula 07 - Operadores Lógicos</title>
</head>
<body>
    <div>
        <?php
            // aula07/index4.php?ano=2003
            // Mostrando se o Eleitor é obrigdo a votar ou não
            // No Brasil, de 18 a 64 anos é obrigado a votar
            $ano = $_GET["ano"];
            $idade = 2024 - $ano;
            $obrigado = ($idade >=18 and $idade <=64)?"SIM":"NÃO";
            echo "<h2>Ano de Nascimento: $ano</h2>";
            echo "Você tem $idade anos.";
            echo "<br>Com $idade anos é obrigado à votar? <strong>$obrigado</strong>!";
        ?>
    </div>
</body>
</html>
