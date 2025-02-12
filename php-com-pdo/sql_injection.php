<?php

    if(!empty($_POST['usuario']) and !empty($_POST['senha'])) {
    $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
    $usuario = 'root';
    $senha = '';

    try {
    $conexao = new PDO($dsn, $usuario, $senha);

    $query = "select * from tb_usuarios where ";
    $query .= "email = :usuario ";
    $query .= "AND senha = :senha ";

    // método prepare utilizado para separar query dos valores
    $stmt = $conexao->prepare($query);
    
    // bindValue(valor de ligação) utilizado para fazer a associação de valores de forma segura
    $stmt->bindValue(':usuario', $_POST['usuario']);
    // colocando na query valores de forma protegida de sql_injection
    // o input será tratado como um texto de forma geral, impedindo concatenação de sql por meio do usuário
    $stmt->bindValue(':senha', $_POST['senha']);

    // executando consulta depois das tratativas
    $stmt->execute();

    $usuario = $stmt->fetch();

    echo '<pre>';
    print_r($usuario);
    echo '</pre>';


    } catch(PDOException $e) {
        echo 'Erro:' . $e->getCode() . '<br>Mensagem:' . $e->getMessage();
    }   
    }

     

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="sql_injection.php" method="post">
        <input type="text" placeholder="user" name="usuario">
        <br>
        <!-- cuidado com o input de dados com código sql mal intencionado no meio -->
        <input type="password" placeholder="senha" name="senha">
        <br>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>