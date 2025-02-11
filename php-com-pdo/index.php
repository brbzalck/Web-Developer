<?php
    // mysql: para selecionar o sgbd
    // host=localhost; para definir aonde o banco de dados se encontra
    // dbname=php_com_pdo para escolher qual banco irá abrir
    $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
    // usuário para o PDO conectar ao banco de dados
    $usuario = 'root';
    // senha para o PDO conectar ao banco de dados
    $senha = '';

    try {

        // instanciando uma conexão de PDO que por sua vez faz a interpretação de $dsn = qual SGBD's, aonde está o banco e qual banco
    // $usuário e $senha para conexão ao banco
    $conexao = new PDO($dsn, $usuario, $senha);
    // o objeto $conexao agora além de representar a conexão, vai conseguir fazer CRUD no banco de dados

    // PDOexception é uma classe para retornar qual tipo de erro ocorreu durante a requisição de conexão
    } catch(PDOException $e) {
        // getCode e getMessage são métodos de PDOException
        echo 'Erro:' . $e->getCode() . '<br>Mensagem:' . $e->getMessage();
        // Aqui da para registrar em um banco de dados os erros
    }




    
    

?>