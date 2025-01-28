<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php


    function impostoRenda ($salario) {
        if ($salario <= 1903.98) {
            $resultado = 'Isento';
            return $resultado;
        } else if ($salario >= 1903.99 and $salario <= 2826.65) {
            $resultado = $salario * 0.075;
            return 'Alíquota de 7.5%, imposto a pagar:'. $resultado;
        } else if ($salario >= 2826.66 and $salario <= 3751.05) {
            $resultado = $salario * 0.15;
            return 'Alíquota de 15%, imposto a pagar:'. $resultado;
        } else if ($salario >= 3751.06 and $salario <= 4664.68) {
            $resultado = $salario * 0.225;
            return 'Alíquota de 22.5%, imposto a pagar:'. $resultado;
        } else if ($salario > 4664.68) {
            $resultado = $salario * 0.275;
            return 'Alíquota de 27.5%, imposto a pagar:'. $resultado;
        }
    }

    echo impostoRenda(2000).'<br/>';
    echo impostoRenda(2826.66).'<br/>';
    echo impostoRenda(3000).'<br/>';
    echo impostoRenda(4000).'<br/>';
    echo impostoRenda(5000).'<br/>';

    ?>
</body>
</html>