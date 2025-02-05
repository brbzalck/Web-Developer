<?php

    // jogando por meio de herança atributos e métodos de Veiculo
    // a classe Carro estende de veículo
    class Carro extends Veiculo {
        public $teto_solar = true;

        // construct
        function __construct($placa, $cor)
        {
            // pegando os atributos da herança de Veiculo
            $this->placa = $placa;
            // atribuindo valor dos argumentos de construct para os atributos
            $this->cor = $cor;
        }

        function abrirTetoSolar() {
            echo 'Abrir teto solar';
        }

        function alterarPosicaoVolante() {
            echo 'Alterar posição do volante';
        }
    }

    class Moto extends Veiculo {
        public $contraPesoGuidao = true;

        function __construct($placa, $cor)
        {
            // pegando os atributos da herança de Veiculo
            $this->placa = $placa;
            // atribuindo valor dos argumentos de construct para os atributos
            $this->cor = $cor;
        }

        function empinar() {
            echo 'Vem na bota véin';
        }
    }

    // criando uma classe que unifica atributos redundantes
    // para De cujar para classe carro e moto que tem os mesmos atributos
    class Veiculo {
        public $placa = null;
        public $cor = null;

        function acelerar() {
            echo 'Acelerando';
        }

        function freiar() {
            echo 'Freiando';
        }

    }


    $carro = new Carro('abc123', 'branco');
    $moto = new Moto('def456', 'preta');

    echo '<pre>';
        print_r($carro);
        echo '<br>';
        print_r($moto);
    echo '</pre>';

    $carro->abrirTetoSolar();
    echo '<br>';
    // acessando método de Veiculo que foi herdado ao carro
    $carro->acelerar();
    echo '<hr>';
    $moto->empinar();
    echo '<br>';
    $moto->acelerar();
    echo '<br>';
    $moto->freiar();




?>