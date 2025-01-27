<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 

        $nome = 'Lucas';
        $cor = 'verde';
        $idade = 24;
        $atividade_preferida = 'Ler bons livros';

        // Operador .$var.
        echo 'Olá '.$nome.', vi que sua cor preferida é '.$cor.',
        estou vendo também possui '.$idade.' anos e que gosta de '.$atividade_preferida.'';

        echo '<br/>';
        echo '<br/>';

        // Aspas duplas " str $var"
        echo "Olá $nome, vi que sua cor preferida é $cor ,
        estou vendo também possui $idade anos e que gosta de $atividade_preferida" ;


    ?>

</body>
</html>