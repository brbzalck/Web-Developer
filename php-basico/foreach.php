<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    
        $itens = ['sofá', 'mesa', 'cadeira', 'janela', 'ventilador', 'geladeira'];

        echo '<pre>';
            print_r($itens);
        echo '</pre>';

        // desempacotamento de array
        foreach($itens as $item) {
            echo "$item<br>";

            if($item == 'mesa') {
                echo '(*Compre uma mesa e leve 04 cadeiras*)';
            }
            echo '<br>';
        }

    ?>  


</body>
</html>