<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
        $lista_coisas = [];

        $lista_coisas['frutas'] = ['Banana', 'Maça', 'Uva', 'Morango'];
        $lista_coisas['pessoas'] = ['Lucas', 'Maria', 'José', 'Leticia'];

        print_r($lista_coisas);
        echo '<hr>';
        echo '<pre>';
            var_dump($lista_coisas);
        echo '</pre>';

        $lista_pessoas = [];

        echo '<hr>';
        echo $lista_coisas['frutas'][3];
        echo '<hr>';
        echo $lista_coisas['pessoas'][1];

    ?>
</body>
</html>