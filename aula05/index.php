<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_CSS/estilo.css">
    <title>Aula 5 - Operadores Aritméticos</title>
</head>
<body>
    <div>
        <?php
            // index.php?x=4&y=3
            $valor1 = $_GET["x"];
            $valor2 = $_GET["y"];

            echo "<h3>Valores recebidos: $valor1 e $valor2</h3>";
            echo "Valor absoluto de $valor2 é ".abs($valor2);                                  // Valor Absoluto         - abs()
            echo "<br>Valor de $valor1<sup>$valor2</sup> é ".pow($valor1, $valor2);            // Potência               - pow()
            echo "<br>A raiz de $valor1 é ".sqrt($valor1);                                     // Raiz Ruadrada          - sqrt()
            echo "<br>A parte inteira de $valor2 é ".intval($valor2);                          // Inteiro de numero real - intval()
            echo "<br>O número de $valor1 em moeda é R$".number_format($valor1, 2,",",".");    // Formatação de moedas   - nummber_format()
            echo "<br>O valor de $valor2 arredondado é ".round($valor2);                       // Arredondamento         - round()
                                                                                               // podemos usar também ceil (arredonda pra cima)
                                                                                               // ou floor (arredonda pra baixo)
        ?>
    </div>
</body>
</html>