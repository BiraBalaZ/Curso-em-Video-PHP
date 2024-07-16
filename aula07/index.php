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
            /* Operadores Relacionais
             * Maior            $a > $b;
             * Menor            $a < $b;
             * Maior ou igual   $a >= $b;
             * Menor ou igual   $a <= $b;
             * Diferente        $a != $b ou $a <> $b;
             * Igual            $a == $b;
             * idêntico         $a === $b;
             *
             * Operador Unário
             * expressão?verdadeiro:falso;
             * $maior = $a > $b ? $a : $b;
             */
            $n1 = $_GET["a"];
            $n2 = $_GET["b"];
            $tipo = $_GET["op"]; // 's' para soma e 'm' para multiplicação
            echo "Os valores passados foram $n1 e $n2<br>";
            $r = ($tipo == "s") ? $n1+$n2 : $n1*$n2;
            echo "<br>O resultado é $r";
        ?>
    </div>
</body>
</html>
