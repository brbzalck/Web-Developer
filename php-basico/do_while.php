<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $x=1;
        
        // primeiro executa, depois condiciona


        do {
            echo 'Entrou no do while<br>';

            $x++; // critério de parada


        } while ($x < 9);

    ?>
</body>
</html>