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

        function trocarMarcha() {
            echo 'Desengatar embreagem com a mão e engatar marcha com o pé';
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

        function trocarMarcha() {
            echo 'Desengatar embreagem com o pé e engatar marcha com a mão';
        }
    }

    class Caminhao extends Veiculo {}


    $carro = new Carro('abc123', 'branco');
    $moto = new Moto('def456', 'preta');
    $caminhao = new Caminhao('def456', 'preta');

    $carro->trocarMarcha();
    echo '<br>';
    $moto->trocarMarcha();
    echo '<br>';
    $caminhao->trocarMarcha();
?>