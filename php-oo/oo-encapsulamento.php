<?php

    class Pai {
        // private e protected só podem ser atualizados dentro da classe por meio de métodos internos
        private $nome = 'Jorge';
        protected $sobrenome = 'Silva';
        public $humor = 'Feliz';

        // // Usando uma função interna para acessar o atributo private
        // // e retornar o valor por meio desse método público
        // public function getSobrenome() {
        //     return $this->sobrenome;
        // }
        // // função pública e interna para settar o valor de sobrenome
        // public function setSobrenome($value) {
        //     // condicional para só atualizar nome se estiver no mínimo 3 letras
        //     IF(strlen($value) >= 3) {
        //         return $this->sobrenome = $value;
        //     }
        // }

        public function __get($attr)
        {
            // gettando o valor da DENTRO DA VARIAVEL recebida para $this->nome/sobrenome/humor
            // colocando $this->$variavel é possível gettar os atributos de forma dinâmica
            return $this->$attr;
        }
        public function __set($attr, $value)
        {
            $this->$attr = $value;
        }
        private function executarMania() {
            echo 'Assobiar';
        }
        private function responder() {
            echo 'Oi';
        }
        // acessando private e protected por meio de um método publica que tem acesso a eles
        public function executarAcao() {
            $this->executarMania();
            echo '<br/>';
            $this->responder();
        }
    }

    $pai = new Pai();
    // com o getter público e interno, é possível agora acessar e modificar private/protected
    // echo $pai->nome;
    echo $pai->nome = 'Lucas';
    


?>