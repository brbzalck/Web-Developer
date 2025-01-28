<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
    
        // function soma ($num1, $num2) {
        //     $soma = $num1 + $num2;
        //     return $soma;
        // }
        // echo soma(26,5);
    ?>

    <?php 
        function exibirBoasVindas () {
            echo 'Bem vindo ao curso de PHP!<br/>';
        }
        exibirBoasVindas();

        function calcularAreaTerreno ($largura, $comprimento) {
            $area = $largura * $comprimento;
            return $area;
        }

        // echo calcularAreaTerreno(50, 30);
        $resultado = calcularAreaTerreno(5, 25);
        echo $resultado;

    ?>
    
</body>
</html>