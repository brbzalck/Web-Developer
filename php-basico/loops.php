<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
        $num = 1;
        // operadores comparação / lógicos
        echo '-- Inicio do loop --<br>';
        while(true) {

            $num += 5;

            if ($num == 31 or $num == 51 or $num == 71) {
                // continue volta para o começo do while
                // usado para não fazer nada para baixo em determinada condição
                continue;
            }

            if ($num > 100) { // critério de parada
                break;
            }

            echo "$num<br>";
            
        }
        echo '-- Final do loop --'
    ?>
</body>
</html>