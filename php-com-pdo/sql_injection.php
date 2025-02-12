<?php

    if(!empty($_POST['usuario']) and !empty($_POST['senha'])) {
    $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
    $usuario = 'root';
    $senha = '';

    try {
    $conexao = new PDO($dsn, $usuario, $senha);

    $query = "select * from tb_usuarios where ";
    $query .= "email = '{$_POST['usuario']}' ";
    $query .= "AND senha = '{$_POST['senha']}'";

    echo $query.'<br>';

    $stmt = $conexao->query($query);
    $usuario = $stmt->fetch();

    echo '<pre>';
        print_r($usuario);
    echo '<pre>';

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