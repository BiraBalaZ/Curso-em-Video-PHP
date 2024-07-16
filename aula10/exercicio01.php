<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_CSS/estilo.css">
    <title>Aula 10 - Estrutura Condicional Switch</title>
</head>
<body>
    <div>
        <?php
            $num = isset($_POST["num"]) ? $_POST["num"] : 0;
            $operator = isset($_POST["oper"]) ? $_POST["oper"] : 1;

            switch ($operator) {
                case 1:
                    $result = $num * 2;
                    break;
                case 2:
                    $result = pow($num,3);
                    break;
                case 3:
                    $result = sqrt($num);
            }

            echo "O resultado da operação solicitada foi <span class='foco'>$result</span>";
        ?>
        <a href="exercicio01.html">Voltar</a>
    </div>
</body>
</html>
