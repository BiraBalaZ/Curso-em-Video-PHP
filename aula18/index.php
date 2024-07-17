<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_CSS/estilo.css">
    <title>Aula 18 - Vetores e Matrizes - Parte 1</title>
</head>
<body>
    <div>
        <!-- <table border="1"><tr> -->
        <?php
            ##### Array
            // $n[0] = 3;
            // $n[1] = 5;
            // $n[2] = 8;
            // $n[3] = 2;
            // $n[] = 7; # o PHP entende que é para criar na última posição
            // # ou
            // $n = array(3, 5, 8, 2, 7);


            ##### Criando por Range
            // $c = range(5, 20, 5); # Cria um vetor chamado C com a primeira posição iniciada em 5, até 20 pulando de 5 em 5
            // $c = [05][10][15][20]
            //       0   1   2   3
            // print_r($c);

            // $c = range(5, 20, 2); # Pulando de 2 em 2
            // $c = [05][07][09][11][13][15][17][19]
            //       0   1   2   3   4   5   6   7
            // print_r($c);


            ##### Estrutura foreach !
            #### para usar esse trecho, descomentar o <table> que envelopa o <?php>
            // $c = range(5, 25, 2);
            // foreach($c as $valor) { # para cada valor no vetor $c
            //     echo "<td>$valor";
            // }


            ##### Chaves Personalizadas
            // $vetor = array(1=>"A", 3=>"B", 6=>"C", 8=>"D");
            # ou
            // $vetor = array( 3 => 5,
            //                 1 => 9,
            //                 0 => 8,
            //                 7 => 7);
            // $vetor[] = "E";
            // unset($vetor[3]); # Desalocar o Vetor na posição 3
            // print_r($vetor);


            #### para usar esse trecho, descomentar o <table> que envelopa o <?php>
            // foreach($vetor as $valor) { # para cada valor no vetor $c
            //         echo "<td>$valor";
            // }
            

            ##### Chaves Associativas
            // $cadastro = array("nome" => "Ana",  # String
            //                   "idade" => 23,    # Int
            //                   "peso" => 78.5);  # Float
            // $cadastro["fuma"] = true;           # Boolean

            // print_r($cadastro);

            # utilizando a estrutura foreach com esses valores
            // foreach($cadastro as $campo => $valor) {
            //     echo "O valor do campo <span class='foco'>$campo</span> possui o valor <span class='foco'>$valor</span><br>";
            // }


            ##### Matrizes em PHP
            ### Em resumo, elas não existem, você criar arrays dentro de arrays
            $n = array(array(2,3),      # 0 [2][3]
                       array(3,4),      # 1 [3][4]
                       array(9,5));     # 2 [9][5]
                                        #    0  1

            $n[2][0] = $n[1][1]         # 0  [2] [3]
                                        # 1  [3] [4]
                                        # 2 [>4<][5]
                                        #     0   1
        ?>
        <!-- </table> -->
    </div>
</body>
</html>
