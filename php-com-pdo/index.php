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

    // Criando uma query(consulta) de sql, aonde cria caso n exista tabela com id(a_i) nome email senha
    $query = '
        create table if not exists tb_usuarios(
            id int not null primary key auto_increment,
            nome varchar(50) not null,
            email varchar(100) not null,
            senha varchar(32) not null
        )
    ';

    // utilizando a instância $conexao e o método exec, ambos de PDO - exec(recebe uma variável do tipo string que contem sql)
    $retorno = $conexao->exec($query);
    // o retorno dessa execução retorna quantas linhas da tabela foram alteradas
    echo $retorno;
    
    $query = 'delete from tb_usuarios';
    
    $retorno = $conexao->exec($query);
    // 1
    echo $retorno;


    // PDOexception é uma classe para retornar qual tipo de erro ocorreu durante a requisição de conexão
    } catch(PDOException $e) {
        // getCode e getMessage são métodos de PDOException
        echo 'Erro:' . $e->getCode() . '<br>Mensagem:' . $e->getMessage();
        // Aqui da para registrar em um banco de dados os erros
    }




    
    

?>