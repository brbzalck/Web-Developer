<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- and retorna true somente se as duas condicionais for true -->
    <!-- or retorna true se pelo menos 01(uma) condição for true -->
    <!-- inverte o resultado retornado pela expressão -->
    <?php 
        // pode-se usar && no lugar do and
        if(5 > 3 and 10 > 12) {
            echo 'verdadeiro';
        } else {
            echo 'falso';
        }
    ?>
    <?php 
        // pode-se usar || no lugar de or
        if(5 > 3 or 10 > 12) {
            echo 'verdadeiro';
        } else {
            echo 'falso';
        }
    ?>
    <?php 
        // Executa como se fosse uma função em cima de um condicional
        // que retorna o contrário da condição
        if(!('a' == 'b')) {
            echo 'verdadeiro';
        } else {
            echo 'falso';
        }
    ?>
    <?php 
        // Estabelecendo precedência de verificação condicional
        if((22 == 22 and 3 == 3) or 'a' != 'b') {
            echo 'verdadeiro';
        } else {
            echo 'falso';
        }
    ?>
</body>
</html>