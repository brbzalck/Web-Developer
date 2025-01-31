<?php

    // variável que verifica se a autenticação foi realizada
    $usuario_autenticado = false;

    // usuarios do sistema
    $usuarios_app = [
        ['email' => 'adm@teste.com.br', 'senha' => '123456'],
        ['email' => 'user@teste.com.br', 'senha' => 'abcd'],
        
    ];

    // echo '<pre>';
    //     print_r($usuarios_app);
    // echo '</pre>';

    foreach($usuarios_app as $user) {
        if ($user['email'] == $_POST['email'] 
        and $user['senha'] == $_POST['senha']) {
            $usuario_autenticado = true;
        }
    }

    if($usuario_autenticado) {
        echo 'Usuário autenticado';
    } else {
       header('Location: index.php?login=erro');
    }


?>