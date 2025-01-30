<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
        //sequenciais (numéricos)
        // $lista_frutas = array('Banana','Maçã','Morango','Uva','Abacate');
        $lista_frutas = ['Banana','Maçã','Morango','Uva','Abacate'];
        // INSERT
        $lista_frutas[] = 'Abacaxi';

        echo '<pre>';
            var_dump($lista_frutas);
        echo '</pre>';
        echo '<hr>';
        echo '<pre>';
            print_r($lista_frutas);
        echo '<pre/>';
        echo '<hr>';

        // SELECT
        echo $lista_frutas[4];

        echo '<hr>';

        // Array associativos
        // Tem a possibilidade de mudar o índice por associação
        // $lista_compras = array('a' => 'Frango', 'b' => 'Ovo', 'c' => 'Frutas', 'd' => 'Legumes');
        $lista_compras = ['a' => 'Frango', 'b' => 'Ovo', 'c' => 'Frutas', 'd' => 'Legumes'];

        // aqui o índice novo conta como 'string'
        echo $lista_compras['c'];
        echo '<pre>';
            var_dump($lista_compras);
        echo '<pre>';

    ?>
</body>
</html>