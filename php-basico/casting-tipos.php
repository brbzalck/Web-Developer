<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

        // gettype() => retorna o tipo da VAR
        $valor = 10;
        $valor5 = 10.54;

        // $valor2 = (double) $valor; -> double float real 
        // $valor2 = (real) $valor; -> double float real 
        $valor2 = (float) $valor; // double float real

        $valor3 = (string) $valor;

        $valor4 = (int) $valor5;

        $valor6 = (bool) $valor;

        echo gettype($valor).'<br>';
        echo gettype($valor2). $valor2.'<br>';
        echo gettype($valor3).'<br>';
        echo gettype($valor4). $valor4.'<br>';
        echo gettype($valor6). $valor6;
    ?>
</body>
</html>