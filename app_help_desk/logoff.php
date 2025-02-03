<?php

    // Inicia sessão para ter acesso as variáveis de sessão
    session_start(); 

    session_destroy(); // destroi todas variáveis de sessão
    header('Location: index.php') // força redirecionamento


    // echo '<pre>';
    //     print_r($_SESSION);
    // echo '</pre>';
    // // removendo índices do array de seção
    // // unset()

    // unset($_SESSION['flag1']); // caso n exista ignora

    // echo '<pre>';
    //     print_r($_SESSION);
    // echo '</pre>';

    // // destruir a variável de seção
    // // session_destroy()

    // session_destroy(); // destroi todas variáveis de sessão
    // // força redirecionamento

    // echo '<pre>';
    //     print_r($_SESSION);
    // echo '</pre>';

    

?>