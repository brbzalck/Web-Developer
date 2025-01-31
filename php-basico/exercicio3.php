<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
        $numeros_sorteados = [];

        while (count($numeros_sorteados) <= 5) {
            $num = rand(1, 60);
                if (!in_array($num, $numeros_sorteados)) {
                    $numeros_sorteados[] = $num;
                }
        }

        echo '<pre>';
            print_r($numeros_sorteados);
        echo '</pre>';
        
    
    ?>
</body>
</html>