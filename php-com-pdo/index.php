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
    
    $query = '
        select * from tb_usuarios
    ';
    
    // query retorna um PDOStatement - faz o comando e retorna dados para $stmt
    $stmt = $conexao->query($query);

    echo '<pre>';
        print_r($stmt);
    echo '</pre>';
    
    // fetchAll é um método de PDOStatement que por sua vez pega o retorno de query e joga em uma array
    $lista = $stmt->fetchAll();
    
    echo '<pre>';
        print_r($lista);
    echo '<pre>';

    echo $lista[2]['senha'];

    // PDOexception é uma classe para retornar qual tipo de erro ocorreu durante a requisição de conexão
    } catch(PDOException $e) {
        // getCode e getMessage são métodos de PDOException
        echo 'Erro:' . $e->getCode() . '<br>Mensagem:' . $e->getMessage();
        // Aqui da para registrar em um banco de dados os erros
    }




    
    

?>