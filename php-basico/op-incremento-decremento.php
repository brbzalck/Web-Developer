<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h3>Pós-incremento</h3>

    <?php 
        $a = 7;

        echo "O valor contido em a é $a <br/>";
        // Aqui a maquina vai ler o valor atual, e DEPOIS adicionar mais 1
        $a++;
        echo 'O valor atualizado por meio de $a++ é '. $a
        
    ?>
    <h3>Pré-incremento</h3>

    <?php 
        $a = 7;

        echo "O valor contido em a é $a <br/>";
        // Aqui máquina já vai ler a variável atualizada com novo valor
        ++$a;
        echo 'O valor atualizado por meio de ++$a é '. $a
        
    ?>
    <h3>Pós-decremento</h3>

    <?php 
        $a = 7;

        echo "O valor contido em a é $a <br/>";
        // Aqui a maquina vai ler o valor atual, e DEPOIS adicionar mais 1
        $a--;
        echo 'O valor atualizado por meio de $a-- é '. $a
        
    ?>
    <h3>Pré-decremento</h3>

    <?php 
        $a = 7;

        echo "O valor contido em a é $a <br/>";
        // Aqui máquina já vai ler a variável atualizada com novo valor
        --$a;
        echo 'O valor atualizado por meio de --$a é '. $a
        
    ?>
</body>
</html>