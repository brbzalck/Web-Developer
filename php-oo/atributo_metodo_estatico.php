<?php

    class Exemplo {
        // Atributos estáticos só podem ser chamados na sintaxe Classe::
        public static $atributo1 = 'Eu sou um atributo estático';
        public $atributo2 = 'Eu sou um atributo normal';

        public static function metodo1() {
            // em métodos estáticos não pode se utilizar o this
            // $this->$atributo1;
            echo 'Eu sou um método estático';
        }

        public function metodo2() {
            echo 'Eu sou um método normal';
        }

    }

    // $x = new Exemplo();
    // Acessando um atributo estático da classe::attr;
    echo Exemplo::$atributo1;
    // atributos/métodos estáticos podem ser acessados diretamente sem a instância de um objeto
    echo '<br>';
    Exemplo::metodo1();
    echo '<br>';


?>