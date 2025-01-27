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
        $valor_compra = 225;

        $valor_frete = 50;
        $recebeu_desconto_frete = false;

        if($usuario_possui_cartao_loja and $valor_compra >= 100) {
            $valor_frete = 0;
            $recebeu_desconto_frete = true;
        }
    ?>
    <h1> Detalhes do pedido </h1>
    <p>Possui cartão da loja</p>
    <?php
        if($usuario_possui_cartao_loja == true) {
            echo 'SIM';
        } else {
            echo 'NÃO';
        }
    ?>
    <p>Valor da compra: <?= $valor_compra ?></p>
    <p>Recebeu desconto no frete?</p>
    <?php
        if($usuario_possui_cartao_loja == true and $valor_compra >= 100) {
            echo 'SIM';
        } else {
            echo 'NÃO';
        }
    ?>
    <p>Valor do frete: <?= $valor_frete ?></p>

</body>
</html>