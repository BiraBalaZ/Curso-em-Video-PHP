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
            $dia = isset($_GET["ds"])?$_GET["ds"]:0;

            switch($dia) {
                case 2:
                case 3:
                case 4:
                case 5:
                case 6:
                    echo "Levanta e vai estudar! :)";
                    break;
                case 7:
                case 8:
                    echo "Descanse, pequeno gafanhoto ;)";
                    break;
                default:
                    echo "Dia da semana inválido...";
            }
        ?>
        <a href="exercicio02.html">Voltar</a>
    </div>
</body>
</html>
