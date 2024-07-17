<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_CSS/estilo.css">
    <title>Aula 17 - Funções String em PHP - Parte 2</title>
</head>
<body>
    <div>
        <?php
            ##### strtoloer() - Deixa a String toda em letras minúsculas
            // $nome = "Erick Monteiro";
            // print("Seu nome é ".strtolower($nome));

            ##### strtolupper() - Deixa a String toda em letras maiúsculas
            // $nome = "Erick Monteiro";
            // print("Seu nome é ".strtoupper($nome));

            ##### ucfirst() - Coloca a primeira letra em maiúsucla
            // $nome = "erick monteiro";
            // print("Seu nome é ".ucfirst($nome));

            ##### lcfirst() - Coloca a primeira letra em minúsucla
            // $nome = "ERICK MONTEIRO";
            // print("Seu nome é ".lcfirst($nome));

            ##### ucwords() - Deixa todas as primeiras letras em maiúsucula
            // $nome = "erick monteiro";
            // print("Seu nome é ".ucwords($nome));

            ##### strpos() - Mostra a posição que a String solicitada foi encontrada
            // $frase = "Estou aprendendo PHP";
            // $pos = strpos($frase, "PHP");
            // echo $pos; # 17

            ##### stripos() - Encontra mesmo se estiver em minúsculo
            // $frase = "Estou aprendendo PHP";
            // $pos = stripos($frase, "php");
            // echo $pos; # 17

            ##### substr_count() - Mostra quantas vezes a string apareceu dentro do texto
            // $frase = "Estou aprendendo PHP no Curso em Vídeo de PHP";
            // $contador = substr_count($frase, "PHP");
            // echo $contador; # 2

            ##### substr() - Fatia a string da posição inicial à final
            // $site = "Curso em Vídeo";
            // $sub = substr($site, 0, 5);
            // echo $sub; # Curso
            
            // $sub = substr($site, 7); # da 7 até o final da string
            // echo $sub; # m Vídeo

            // $sub = substr($site, -5); # últimas 5 letras da string
            // echo $sub; # Vídeo
            
            // $sub = substr($site,-5 , 2); # das últimas 5 letras da string pega a segunda letra
            // echo $sub; # Vídeo

            ##### str_pad() - complementa
            // $nome = "Erick";
            // $novo_nome = str_pad($nome, 30, "&nbsp", STR_PAD_RIGHT);
            // echo "O $novo_nome é lindo!";

            # STR_PAD_LEFT   - xxxxxxString - Espaços à esquerda.
            # STR_PAD_CENTER - xxxStringxxx - Espaços ao redor.
            # STR_PAD_RIGHT  - Stringxxxxxx - Espaços à direita.

            ##### str_repeat() - Repete o texto
            // $txt = str_repeat("PHP", 5);
            // echo str_repeat("-", 40); # --------------------
            // echo "<br>$txt<br>";      # PHPPHPPHPPHPPHP
            // echo str_repeat("-", 40); # --------------------

            ##### str_replace() - Substitui algo na string
            // $frase = "Gosto de estudar Matemática!!!";
            // $nova_frase = str_replace("Matemática", "PHP", $frase);
            // echo $nova_frase;
        ?>
    </div>
</body>
</html>
