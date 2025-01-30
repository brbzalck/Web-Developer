<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
        $lista_frutas = ['Banana', 'Maça', 'Morango', 'Uva'];

        echo '<pre>';
            print_r($lista_frutas);
        echo '</pre>';

        // retorna true or false para a existência do que está sendo procurado
        $existe_maca = in_array('Maça', $lista_frutas);
        $existe_abacate = in_array('Abacate', $lista_frutas);
        // true=1 false=vazio 


        $existe = in_array('Banana', $lista_frutas);

        if ($existe) {
            echo 'Sim, esse item contém no array';
        } else {
            echo 'Não, esse item não contém no array';
        }
        echo '<hr>';
        // se existir -> retorna o índice do item
        $existe_as = array_search('Pera', $lista_frutas);
        // caso n exista -> retorna null

        if ($existe_as != null) {
            echo 'Sim, esse item contém no array';
        } else {
            echo 'Não, esse item não contém no array';
        }

        echo '<hr>';

        // jogando um array(var) de nome $lista_frutas que agora
        // se chama frutas para dentro de outro array $lista_coisas
        $lista_coisas = [
            'frutas' => $lista_frutas,
            'pessoas' => ['Lucas', 'Maria', 'João', 'Letícia'] 
        ];

        echo '<pre>';
            print_r($lista_coisas);
        echo '</pre>';

        echo '<hr>';

        $existe_coisas = in_array('Uva', $lista_coisas['frutas']);

        if ($existe_coisas) {
            echo 'Existe';
        } else {
            echo 'Não existe';
        }

    ?>
    <hr>
    <?= $existe_maca ? 'Existe maça na lista' : 'Não existe maça na lista'; ?> <br>
    <?= $existe_abacate ? 'Existe abacate na lista' : 'Não existe abacate na lista'; ?>
    <hr>
</body>
</html>