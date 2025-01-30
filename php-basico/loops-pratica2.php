<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    
        $funcionarios = [
            ['nome' => 'João','salario' => 2500, 'data_nascimento' => '08/05/2000'],
            ['nome' => 'Maria','salario' => 3500],
            ['nome' => 'Júlia','salario' => 1500]
        ];

        echo '<pre>';
            print_r($funcionarios);
        echo '</pre>';


        foreach($funcionarios as $idx => $funcionario) {
            foreach($funcionario as $idx2 => $valor) {
                echo "$idx2 - $valor<br>";
            }
            echo '<hr>';
        }

    ?>


</body>
</html>