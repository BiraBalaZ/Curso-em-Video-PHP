<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_CSS/estilo.css">
    <title>Aula 14 - Rotinas PHP - Parte 1</title>
</head>
<body>
    <div>
        <?php
            function soma() {
                $p = func_get_args();
                $tot = func_num_args();
                $soma = 0;

                for ($i=0;$i<$tot;$i++) {
                    $soma += $p[$i];
                }
                return $soma;
            }

            $res = soma(3, 4, 8, 1, 2, 5, 7, 9, 6);
            echo "<p>A soma de todos os valores é <span class='foco'>$res</span>.</p>";
        ?>
    </div>
</body>
</html>
