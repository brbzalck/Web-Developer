<?php 

    class Conexao {
        private $host = 'localhost';
        private $dbname = 'php_com_pdo';
        private $user = 'root';
        private $pass = '';




        public function conectar() {
            // tentando conexão com os argumentos necessários para PDO instanciar uma conexão
            try {
                $conexao = new PDO(
                    // Usando atributos privados para configurar os argumentos
                    "mysql:host=$this->host;dbname=$this->dbname",
                    "$this->user",
                    "$this->pass"
                );

                // se a conexão for um sucesso, essa função retorna uma conexão para manipulação do banco de dados
                return $conexao;

            } catch(PDOException $e) {
                // usando método getMessage para retornar algum possível erro
                echo '<p>'.$e->getMessage().'<p>';
            }
        }
    }


?>