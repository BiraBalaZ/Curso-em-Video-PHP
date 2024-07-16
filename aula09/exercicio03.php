<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
        // if ($situacao == "APROVADO") {
        //     $cor = "green";
        // } else {
        //     $cor = "red";
        // }
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_CSS/estilo.css">
    <title>Aula 09 - Estrutura Condicional if</title>
    <style>
        
    </style>
</head>
<body>
    <div>
        <?php
            $num1 = $_GET["num1"];
            $num2 = $_GET["num2"];
            $media = ($num1 + $num2) / 2;

            echo "A média entre $num1 e $num2 é igual a $media";

            if ($media >= 6) {
                $situacao = "APROVADO";
            } else {
                $situacao = "RECUPERAÇÃO";
            }

            echo "<br>Situação do aluno: $situacao";
        ?>
        <a href="index3.html">Voltar</a>
    </div>
</body>
</html>
