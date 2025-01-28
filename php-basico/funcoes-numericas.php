<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $num = 7.3;

        echo ceil($num).'<br>'; // arredonda p cima
        echo floor($num).'<br>'; // arredonda p baixo
        echo round($num).'<br>'; // arredonda pela casa decimal
        echo rand(10, 20).'<br>'; // gera um número aleatório
        // pode-se usar de parâmetro X e Y para selecionar intervalo
        echo sqrt(9).'<br>'; // calcula a raiz quadrada do num

    ?> 
</body>
</html>