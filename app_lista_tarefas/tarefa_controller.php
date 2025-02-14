<?php 

    // Usando caminho do arquivo como se estivesse no diretório público
    require "../app_lista_tarefas/tarefa.model.php";
    // pois quando requisitado esses arquivos
    require "../app_lista_tarefas/tarefa.service.php";
    // o diretório tem como base o caminho do público
    require "../app_lista_tarefas/conexao.php";

    // utilizando os operadores ternários (? :) para definir a variável ação
    // SE $_GET['acao'] existir $acao == $_GET['acao'] SE NÃO EXISTIR : $acao;
    // ? verifica a condição, e se for true ele executa oque vier depois
    // se for false ignora, e : executa oque vier depois
    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

    if($acao == 'inserir') {

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

    // após adicionar tarefa, redireciona para nova_tarefa.php com parâmetro de sucesso=1
    header('Location: nova_tarefa.php?sucesso=1');

    // colocando mais uma condicional de acao = recuperar, para direcionamento
    } else if($acao == 'recuperar')  {
        
        // instanciando da classe Tarefa e Conexao, pois a classe TarefaService precisa dessas duas instâncias
        $tarefa = new Tarefa();
        $conexao = new Conexao();

        // classe TarefaService que faz o CRUD no banco de dados
        $tarefaService = new TarefaService($conexao, $tarefa);

        // usando o método recuperar
        $tarefas = $tarefaService->recuperar();

        // acao recebida pelo action do javascript
    } else if($acao == 'atualizar') {
        // instanciando nova tarefa
        $tarefa = new Tarefa();
        // settando novos valores resgatados pelo post no objeto tarefa e nos atributos id e tarefa
        $tarefa->__set('id', $_POST['id'])->__set('tarefa', $_POST['tarefa']);
        // agora o método __set retorna o próprio objeto, podendo utilizar novamento o método sem precisar chamar novamente o obj
        
        // criando conexão com o banco
        $conexao = new Conexao();

        // instânciando nova tarefa service para CRUD
        $tarefaService = new TarefaService($conexao, $tarefa);
        // tarefaService vai retornar true(1) ou false(0) do método atualizar(execute(retorna qnts linhas foram modificadas))
        if($tarefaService->atualizar()) {
            // caso atualize, redireciona para todas_tarefas novamente com dados atualizados no back e no front
            header('Location: index.php');
        }
        // acao remover recebida pela função remover(js)
    } else if($acao == 'remover') {

        $tarefa = new Tarefa();
        // settando id pelo id de _get recebido da função remover(js)
        $tarefa->__set('id', $_GET['id']);

        // criando nova conexão
        $conexao = new Conexao();

        // criando nova tarefaService para CRUD
        $tarefaService = new TarefaService($conexao, $tarefa);
        // executando método para remover
        $tarefaService->remover();
        
        header('Location: todas_tarefas.php');

    // se acao for marcarRealizada
    } else if($acao= 'marcarRealizada') {
        $tarefa = new Tarefa();
        // atribuindo para model Tarefa o id resgatado do front, e atualizando valor de id_status pois estamos concluindo tarefa
        $tarefa->__set('id', $_GET['id'])->__set('id_status', 2);

        // criando nova conexão com banco de dados
        $conexao = new Conexao();

        // criando tarefaService para CRUD
        $tarefaService = new TarefaService($conexao, $tarefa);
        // executando método que conclui tarefa
        $tarefaService->marcarRealizada();

        // ao terminar de atualizar no banco e no model tarefa, redireciona para todas_tarefas.php
        header('Location: todas_tarefas.php');

    }
?>