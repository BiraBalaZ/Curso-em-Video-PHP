<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_CSS/estilo.css">
    <title>Aula 19 - Vetores e Matrizes - Parte 2</title>
</head>
<body>
    <div>
        <pre>
            <?php
                ##### Exibindo vetor
                ### a tag <pre> deixa pré-formatado
                // $n = array(3, 5, 8, 2); # [3][5][8][2]
                //                         #  0  1  2  3
                // print_r($n);
                // var_dump($n); # melhor para ver o tipo dos elementos, int, str... e a quantidade de elementos

                // $contador = count($n); # conta a quantidade de elementos
                // echo ("O vetor tem $contador elementos");

                ##### Adicionando valor no FINAL do vetor
                // $v = array("A", "J", "M", "X", "K");
                // print_r($v);

                // $v[] = "O";
                // # ou
                // array_push($v, "L");
                
                // print_r($v);

                // ### Eliminando o ÚLTIMO item do vetor
                // array_pop($v);
                // print_r($v);


                // ##### Adicionando valor no INÍCIO do vetor
                // array_unshift($v, "T");
                // print_r($v);

                // ### Eliminando o PRIMEIRO item do vetor
                // array_shift($v);
                // print_r($v);


                ##### Ordenação Associativa - asort() - Menor para o maior
                // $n = array(3, 5, 8, 2);

                // # Antes     [3][5][8][2]
                // #            0  1  2  3
                // asort($n); # mexe inclusive nos íncices
                
                // # Depois    [2][3][5][8]
                // #            3  0  1  2
                // print_r($n);


                ##### Ordenação Associativa Reversa - arsort() - Maior para o menor
                // $n = array(3, 5, 8, 2);

                // # Antes     [3][5][8][2]
                // #            0  1  2  3
                // arsort($n);
                
                // # Depois    [8][5][3][2]
                // #            2  1  0  3
                // print_r($n);


                ##### Ordenando por Chaves - ksort() - Menor para o maior
                $v = array(2=>"A", 5=>"J", 0=>"M", 3=>"X", 4=>"K");
                print_r($v);
                ksort($v);
                print_r($v);

                # Antes
                # [A][J][M][X][K]
                #  2  5  0  3  4
                #
                # Depois
                # [M][A][X][K][J]
                #  0  2  3  4  5

                ##### Ordenando por Chaves Reversa - krsort() - Maior para o maior
                krsort($v);
                print_r($v);

                # Antes
                # [M][A][X][K][J]
                #  0  2  3  4  5
                #
                # Depois
                # [J][K][X][A][M]
                #  5  4  3  2  0
            ?>
        </pre>
    </div>
</body>
</html>
