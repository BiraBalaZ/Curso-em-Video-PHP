<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_CSS/estilo.css">
    <title>Aula 16 - Funções String em PHP - Parte 1</title>
</head>
<body>
    <div>
        <?php
            ##### printf()
            // $produto = "leite";
            // $preco = 4;
            // // printf("O %s está custando R$ %.2f",$produto, $preco);

            ###### print_r()
            // $vetor[0] = 4;
            // $vetor[1] = 8;
            // $vetor[2] = 3;
            // // print_r($vetor); 

            // $vetor2 = array(3, 7, 6, 2, 1, 9);
            // print_r($vetor2);

            ###### wordwrap()
            // $txt = "Aqui nós temos um exemplo de string gigante que será quebrada em alguns lugares e nao sei mais o que escrever vou colocar lorem ipsum dolor sit amet";
            // $res = wordwrap($txt, 5, "<br>\n", false);
            // echo $res;

            ###### strlen() - Conta quandos caracteres tem na string incluindo espaços
            // $txt = "Curso em Vídeo PHP";
            // $tamanho = strlen($txt);
            // echo $tamanho;

            #####  trim() - Elimina espaços do início e fim da String 
            ##### ltrim() - Elimina espaços do inicio (left)
            ##### rtrim() - Elimina espaços do fim (right)
            // $nome = "   José da Silva   ";
            // echo strlen(trim($nome));

            ##### str_word_count() - Conta as palavras de uma String
            // $frase = "Eu vou estudar PHP";
            // $count = str_word_count($frase, 0);
            // echo $count;                             # 4
            // $count = str_word_count($frase, 1);
            // print_r ($count);                        # Array ( [0] => Eu [1] => vou [2] => estudar [3] => PHP )
            
            // $count = str_word_count($frase, 2);
            // print_r ($count);                        # Array ( [0] => Eu [3] => vou [7] => estudar [15] => PHP )

            ##### explode() - Versao mais nova do String Word Count - str_word_count()
            // $site = "Curso em Vídeo";
            // $vetor = explode(" ", $site);
            // print_r ($vetor);                        # Array ( [0] => Curso [1] => em [2] => Vídeo )
        
            ##### str_split() - Pega cada Letra e coloca em um índice
            // $nome = "Maria";
            // $vetor = str_split($nome);
            // print_r($vetor);                          # Array ( [0] => M [1] => a [2] => r [3] => i [4] => a )

            ##### implode() || join() - Junta os índices em uma string com separador, nesse caso, uma "#"
            // $vetor[0] = "Curso";
            // $vetor[1] = "em";
            // $vetor[2] = "Vídeo";
            // $texto = implode("#", $vetor);
            // print($texto);                            # Curso#em#Vídeo

            ##### chr()
            $letra = chr(67);
            echo "A letra de código 67 é $letra.";

            ##### ord()
            $letra = "C";
            $codigo = ord($letra);
            echo "O código da letra $letra é $codigo.";
        ?>
    </div>
</body>
</html>
