<?php 

    // Usando caminho do arquivo como se estivesse no diretório público
    require "../app_lista_tarefas/tarefa.model.php";
    // pois quando requisitado esses arquivos
    require "../app_lista_tarefas/tarefa.service.php";
    // o diretório tem como base o caminho do público
    require "../app_lista_tarefas/conexao.php";

    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    // criando objeto de Tarefa
    $tarefa = new Tarefa();
    // usando o objeto tarefa para settar o atributo do obj com o atributo do input | $_POST/name="" -> front end
    $tarefa->__set('tarefa', $_POST['tarefa']);

    // crinado instância de conexão
    $conexao = new Conexao();

    // criando objeto de TarefaService que OBRIGA uma instância de conexão e uma de tarefa
    $tarefaService = new TarefaService($conexao, $tarefa);
    // Usando método inserir de tarefaService
    $tarefaService->inserir();

    
    echo '<pre>';
    print_r($tarefaService);
    echo '</pre>';


?>