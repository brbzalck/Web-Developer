<?php 

    // echo '<pre>';
    //     // método post só recupera info se estiver name associado ao html
    //     print_r($_POST);
    // echo '</pre>';

    // abrindo sessão para adicionar índice id na linha 20
    session_start();

    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);

    // implode #
    // $array_attr = [$titulo, $categoria, $descricao];
    // $array_attr_fim = implode('#', $array_attr);

    // PHP_EOL > constante do php que faz quebra de linha em determinada str
    $texto = $_SESSION['id'] . '#' . $titulo .'#'. $categoria .'#'. $descricao . PHP_EOL;


    // abrindo o arquivo com a função fopen e método 'a' para leitura e escrita no arquivo.hd
    // salvando abertura do arquivo L/E numa variável p/ ser usada em fwrite e fclose
    $arquivo = fopen('arquivo.hd', 'a');

    // escrevendo no arquivo aberto texto de $_POST já formatado 
    fwrite($arquivo, $texto);

    // fechando arquivo
    fclose($arquivo);

    header('Location: abrir_chamado.php')

    // echo $texto;


?>