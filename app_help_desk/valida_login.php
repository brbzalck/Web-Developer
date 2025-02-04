<?php

    // Iniciando sessão que fica armazenada no lado do servidor
    session_start();

    // variável que verifica se a autenticação foi realizada
    $usuario_autenticado = false;
    // variáveis que guarda perfil e usuário de cada user
    $usuario_id = null;
    $perfil_id = null;

    // criando array que guarda tipos de perfis
    $perfis = [1 => 'Administrativo', 2 => 'Usuário'];

    // usuarios do sistema
    $usuarios_app = [
        ['id' => 1, 'email' => 'adm@teste.com.br', 'senha' => '1234', 'perfil_id' => 1],
        ['id' => 2,'email' => 'user@teste.com.br', 'senha' => '1234', 'perfil_id' => 1],
        ['id' => 3,'email' => 'jose@teste.com.br', 'senha' => '1234', 'perfil_id' => 2],
        ['id' => 4,'email' => 'maria@teste.com.br', 'senha' => '1234', 'perfil_id' => 2],
        
    ];

    // echo '<pre>';
    //     print_r($usuarios_app);
    // echo '</pre>';

    // foreach para verificar os usuários da array
    foreach($usuarios_app as $user) {
        // verificando se oque veio do $_POST bate com $usuários um por um
        if ($user['email'] == $_POST['email'] 
        and $user['senha'] == $_POST['senha']) {
            $usuario_autenticado = true;
            // atribuindo para variáveis id e perfil quem vem de cada índice (foreach)$usuários_app -> $user id perfil
            $usuario_id = $user['id'];
            $perfil_id = $user['perfil_id'];
        }
    }

    if($usuario_autenticado) {
        echo 'Usuário autenticado';
        // Armazenando valor para autenticado
        $_SESSION['autenticado'] = 'SIM';
        // vinculando a variável que guarda o id e perfil do usuário nas variáveis de sessão
        // as variáveis de sessão podem ser usadas em qualquer lugar da aplicação, desde que haja session_start();
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $perfil_id;
        $_SESSION['flag1'] = 'NAO';
        // se autenticado, direciona para home
        header('Location: home.php');
    } else {
        // função cabeçalho joga o usuário para o local: index.php?(com parâmetro que pode ser resgatado)
        // Armazenando valor para autenticado
        $_SESSION['autenticado'] = 'NAO';
        header('Location: index.php?login=erro');
    }


?>