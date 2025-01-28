<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
        $texto = 'Curso completo de PHP';

        // string to lower
        echo $texto.'<br/>';
        echo strtolower($texto).'<br/><hr>';
        // string to lower
        echo $texto.'<br/>';
        echo strtoupper($texto).'<br/><hr>';
        // upper case first
        echo $texto.'<br/>';
        echo ucfirst($texto).'<br/><hr>';
        // conta qtde da str
        echo $texto.'<br/>';
        echo strlen($texto).'<br/><hr>';
        // substituir letras por letras
        echo $texto.'<br/>';
        echo str_replace('PHP', 'JavaScript', $texto).'<br/><hr>';
        // retornando parte da str
        echo $texto.'<br/>';
        echo substr($texto, 6, 8).'<br/><hr>';

    ?>
</body>
</html>