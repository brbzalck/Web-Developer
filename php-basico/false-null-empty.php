<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
        // false (true/false) - tipo variável boolean
        // null e empty - valores especiais

        $funcionario1 = null;
        $funcionario2 = '';
        $funcionario3 = false;

        // valores null
        if(is_null($funcionario1)) {
            echo 'variável está Nula';
        } else {
            echo 'variável não está está nula';
        }
        echo '<hr>';
        if(is_null($funcionario2)) {
            echo 'variável está Nula';
        } else {
            echo 'variável não está está nula';
        }
        echo '<hr>';
        // empty para valores vazios
        // empty pode considerar null e false como vazio
        if(empty($funcionario1)) {
            echo 'variável está Vazia';
        } else {
            echo 'variável não está Vazia';
        }
        echo '<hr>';
        if(empty($funcionario2)) {
            echo 'variável está Vazia';
        } else {
            echo 'variável não está Vazia';
        }
        echo '<hr>';
        if(empty($funcionario3)) {
            echo 'variável está Vazia';
        } else {
            echo 'variável não está Vazia';
        }
        echo '<hr>';



    ?>
</body>
</html>