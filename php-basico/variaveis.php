<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        // String
        $nome = 'Lucas Barbosa';
        // int
        $idade = 24;
        // float
        $peso = 66.5;
        // bool
        $fumante_sn = false; // (true = 1) or (false = vazio)

        // ... lógica ...

        // Mudando o valor da variável
        $idade = 25;
    ?>

    <h1>Ficha cadastral</h1>
    <br>
    <!-- Pode-se usar a tag < ?php echo $var ? > -->
    <p>Nome: <?= $nome?></p><br>
    <p>Idade: <?= $idade?></p><br>
    <p>Peso: <?= $peso?></p><br>
    <p>Fumante: <?= $fumante_sn?></p>

</body>
</html>