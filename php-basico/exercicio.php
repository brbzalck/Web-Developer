<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $idade = 24;
        $peso = 66;
        $requisitos = false;

        if (($idade >= 16 and $idade <= 69) and $peso >= 50) {
            $requisitos = true;
        } else {
            $requisitos = false;
        }
    ?>
    <h1>Requisitos</h1>
    <p>O voluntário atende aos requisitos?</p>
    <?php
        $resultado = $requisitos ? 'Atende os requisitos' : 'Não atende os requisitos';
        echo $resultado;
    ?>
</body>
</html>