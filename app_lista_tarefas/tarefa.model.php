<?php 

    class Tarefa {
        private $id;
        private $id_status;
        private $tarefa;
        private $data_cadastro;

        public function __get($attr) {
            return $this->$attr;
        }
        public function __set($attr, $value) {
            $this->$attr = $value;
            // agora __set não apenas atribui valor, mas também retorna o próprio objeto
            return $this;
        }
    }

?>