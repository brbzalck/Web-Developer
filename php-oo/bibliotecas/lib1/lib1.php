<?php

    namespace A;

    interface InterfaceCliente {
        public function salvar();
    }

    class Cliente implements InterfaceCliente {
        public $nome = 'Lucas';
        public function __get($attr) {
            return $this->$attr;
        }
        public function salvar() {
            echo 'salvando';
        }
        // ao instanciar um objeto o método construct vai pegar os métodos que essa instancia terá
        public function __construct() {
            echo '<pre>';
                print_r(get_class_methods($this));
            echo '</pre>';
        }
    }

?>