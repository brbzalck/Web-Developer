<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    
        $registros = [
            ['titulo' => 'Título notícia 1', 'conteudo' => 'Conteúdo notícia 1'],
            ['titulo' => 'Título notícia 2', 'conteudo' => 'Conteúdo notícia 2'],
            ['titulo' => 'Título notícia 3', 'conteudo' => 'Conteúdo notícia 3'],
            ['titulo' => 'Título notícia 4', 'conteudo' => 'Conteúdo notícia 4']
    ];

        echo '<pre>';
            print_r($registros);
        echo '</pre>';
        ////////////////////////////WHILE/////////////////////////

        $idx = 0;

        // count -> conta a qntd de elementos dentro de um array
        while($idx < count($registros)) {

            // print_r($registros[$idx]);
            // pegando de dentro de cada array o titulo individual
            echo '<h3>'.$registros[$idx]['titulo'].'</h3>';
            echo '<p>'.$registros[$idx]['conteudo'].'</p><br>';
            echo '<hr>';

            $idx++;
        }

        ////////////////////////////DO WHILE/////////////////////////

        $idy = 0;

        do {
            echo '<h3>'.$registros[$idy]['titulo'].'</h3>';
            echo '<p>'.$registros[$idy]['conteudo'].'</p><br>';
            echo '<hr>';

            $idy++;
        } while ($idy < count($registros));

        /////////////////////////////FOR/////////////////////////

        for($idz = 0; $idz < count($registros); $idz++) {
            echo '<h3>'.$registros[$idz]['titulo'].'</h3>';
            echo '<p>'.$registros[$idz]['conteudo'].'</p><br>';
            echo '<hr>';
        }
    ?>

</body>
</html>