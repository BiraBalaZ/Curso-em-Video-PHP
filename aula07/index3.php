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
            // aula07/index3.php?no=Erick&n1=8&n2=5
            $nome  = $_GET["no"];
            $nota1 = $_GET["n1"];
            $nota2 = $_GET["n2"];
            $media = ($nota1 + $nota2) / 2;

            echo "<h2>Boletim</h2>Aluno: $nome<br>Primeira nota: $nota1 pts.<br>Segunda nota: $nota2 pts.<br><br>A média do aluno $nome foi de: $media pontos.";
            
            $resultado = $media>=6?"APROVADO":"REPROVADO";
            echo "<br>O aluno $nome está: <strong>$resultado</strong>.";
        ?>
    </div>
</body>
</html>
