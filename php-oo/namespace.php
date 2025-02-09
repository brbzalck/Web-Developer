<?php 
    namespace A;

    interface InterfaceCliente {
        public function salvar();
    }

    class Cliente {
        public $nome = 'Lucas';
        public function __get($attr) {
            return $this->$attr;
        }
    }
    namespace B;

    interface InterfaceCliente {
        public function deletar();
    }

    // Fazendo referência ao InterfaceCliente do namespace A
    class Cliente implements \A\InterfaceCliente {
        public $nome = 'Barbosa';
        public function __get($attr) {
            return $this->$attr;
        }
        public function salvar() {
            echo 'Salvando';
        }

    }

    // \namespace\Class(); -> para especificar qual class pelo namespace
    $x = new \B\Cliente();
    print_r($x);
    echo $x->__get('nome');

?>