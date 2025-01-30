<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
        $str_array = ['teclado', 'mouse'];
        // verifica se é array
        $retorno = is_array($str_array);

        if($retorno) {
            echo 'Sim, é um array';
        } else {
            echo 'Não, não é um array';
        }
        echo '<hr>';

        $array_chaves = ['Banana','Maça', 'Pera', 'Kiwi'];
        echo '<pre>';
            print_r($array_chaves);
        echo '</pre>';

        // array_keys exibe as chaves dos itens de uma array
        $array_indice = array_keys($array_chaves);

        echo '<pre>';
        // para array -> print_r para desempacotar
            print_r($array_indice);
        echo '</pre>';
        echo '<hr>';

        $array_sort = ['Banana','Maça', 'Pera', 'Kiwi', 'Abacate', 'Uva', 'Pessego', 'Mamão'];
        $array_asort = ['Banana','Maça', 'Pera', 'Kiwi', 'Abacate', 'Uva', 'Pessego', 'Mamão'];

        // sort ordena os itens realocando indice
        sort($array_sort);
        // asorte ordena os itens e preserva os indices
        asort($array_asort);
        // count conta qnts itens tem no array
        $qtd_array = count($array_sort);
        // junta arrays em um só
        $novo_array = array_merge($array_asort, $array_sort);

        echo '<pre>';
            print_r($array_sort);
            print_r($array_asort);
            echo '<hr>';
            echo 'A quantidade de itens no array é '.$qtd_array;
            print_r($novo_array);
        echo '</pre>';
        echo '<hr>';

        $string_data = '26/04/2018';
        $retorno = explode('/', $string_data);
        echo '<pre>';
            echo $string_data.'<br>';
            print_r($retorno);
            // trocando / por - | e colocando em formato americano
            echo $retorno[2].'-'.$retorno[1].'-'.$retorno[0];
        echo '</pre>';
        echo '<hr>';

        $string_data_implode = ['a', 'b', 'c', 'd', 'e'];
        // colocando entre os itens , para exibição
        $retorno_implode = implode(',', $string_data_implode);
        echo $retorno_implode;
    ?>
</body>
</html>