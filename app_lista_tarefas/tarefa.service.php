<?php 
    // CRUD
    class TarefaService {

        // criando os atributos privados para guardar conexão e tarefa
        private $conexao;
        private $tarefa;

        // sempre que instanciar de TarefaService, PRECISA uma instancia de Conexao e uma de Tarefa
        public function __construct(Conexao $conexao, Tarefa $tarefa)
        {
            // atribuindo p/ a conexao de tarefaService a execução do método conectar(que retorna a conexão com o banco de dados)
            $this->conexao = $conexao->conectar();
            // a tarefa recebida da class Tarefa, armazena qual tarefa veio do input
            $this->tarefa = $tarefa;
        }

        // CREATE
        public function inserir() {
            // query para inserir dados na coluna tarefa o valor de :tarefa
            $query = 'insert into tb_tarefas(tarefa)values(:tarefa)';

            // Usando da conexao(obj PDOStatement) o método prepare, para preparar a query para associação com bindValue
            $stmt = $this->conexao->prepare($query);
            // associando :tarefa ao valor contigo no atributo da classe Tarefa
            $stmt->bindValue(':tarefa', $this->tarefa->__get('tarefa'));

            // executando comando sql protegido por prepare/bindValue
            $stmt->execute();

        }
        // READ
        public function recuperar() {

        }
        // UPDATE
        public function atualizar() {

        }
        // DELETE
        public function remover() {

        }


    }

?>