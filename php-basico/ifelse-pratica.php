<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        //
        $usuario_possui_cartao_loja = true;
        $valor_compra = 500;

        $valor_frete = 50;
        $recebeu_desconto_frete = true;

        if($usuario_possui_cartao_loja and $valor_compra >= 400) {
            $valor_frete = 0;
        } else if ($usuario_possui_cartao_loja and $valor_compra >= 300) {
            $valor_frete = 10;
        } else if ($usuario_possui_cartao_loja and $valor_compra >= 100) {
            $valor_frete = 30;
        } else {
            $recebeu_desconto_frete = false;
        }
    ?>
    <h1> Detalhes do pedido </h1>
    <p>Possui cartão da loja</p>
    
    <!-- Operador ternário -->
    <!-- <condição> ? true : false -->
    <!-- dada a condição ? true retorna SIM e false retorna NÃO -->
    <?= $usuario_possui_cartao_loja ? 'SIM' : 'NÃO'; ?>
    <?php
        /*
        if($usuario_possui_cartao_loja == true) {
            echo 'SIM';
        } else {
            echo 'NÃO';
        }
            */
    ?>
    <p>Valor da compra: <?= $valor_compra ?></p>
    <p>Recebeu desconto no frete?</p>
    <?php
        $teste = $recebeu_desconto_frete ? 'SIM' : 'NÃO';
        echo $teste;
        // if($usuario_possui_cartao_loja == true and $valor_compra >= 100) {
        //     echo 'SIM';
        // } else {
        //     echo 'NÃO';
        // }
    ?>
    <p>Valor do frete: <?= $valor_frete ?></p>

</body>
</html>