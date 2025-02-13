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
            // select nas colunas específicas de cada tabela
            $query = 'select 
            t.id, s.status, t.tarefa 
                    from 
            tb_tarefas as t left join tb_status as s on (t.id_status = s.id)
            ';
            // indicando a relação das tabelas t e s com on(relação)

            // usando a conexão recebida na Classe para manipulação no banco de dados
            $stmt = $this->conexao->prepare($query);
            // usando prepare para posterior execução da query, mesmo que não haja inserção de dados externos(poderia usar query)
            $stmt->execute();

            // fazendo o método retornar uma array de objetos(cada linha de dados da tabela vira um objeto, e cada coluna atributos)
            return $stmt->fetchAll(PDO::FETCH_OBJ);

        }
        // UPDATE
        public function atualizar() {

        }
        // DELETE
        public function remover() {

        }


    }

?>