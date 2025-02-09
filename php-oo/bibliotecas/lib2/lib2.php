<?php

    namespace B;

    interface InterfaceCliente {
        public function deletar();
    }

    // Fazendo referência ao InterfaceCliente do namespace A
    class Cliente implements InterfaceCliente {
        public $nome = 'Barbosa';
        public function __get($attr) {
            return $this->$attr;
        }
        public function deletar() {
            echo 'Deletando';
        }
        // ao instanciar um objeto o método construct vai pegar os métodos que essa instancia terá
        public function __construct() {
            echo '<pre>';
                print_r(get_class_methods($this));
            echo '</pre>';
        }
    }

?>