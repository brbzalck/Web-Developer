<?php

    interface equipamentoEletronicoInterface {
        public function ligar();
        public function desligar();
    }

    // ao implementar interfaces, é necessário fazer a assinatura dos métodos necessários
    class Geladeira implements equipamentoEletronicoInterface {
        public function abrirPorta() {
            echo 'Abrir porta';
        }
        public function ligar() {
            echo 'Ligando geladeira';
        }
        public function desligar() {
            echo 'desligando geladeira';
        }



    }

    class Tv implements equipamentoEletronicoInterface {
        public function trocarCanal() {
            echo 'Trocar canal';
        }
        public function ligar() {
            echo 'Ligando TV';
        }
        public function desligar() {
            echo 'desligando TV';
        }

    }

    $x = new Geladeira();
    $y = new Tv();

    interface MamiferoInterface {
        public function respirar();
    }
    interface TerrestreInterface {
        public function andar();
    }
    interface AquaticoInterface {
        public function nadar();
    }

    class Humano implements MamiferoInterface, TerrestreInterface {
        public function respirar() {
            echo 'Respirar';
        }
        public function andar() {
            echo 'Andando';
        }
        public function conversar() {
            echo 'Olá td bem';
        }
    }
    class Baleia implements MamiferoInterface, AquaticoInterface {
        public function respirar() {
            echo 'Respirar';
        }
        public function nadar() {
            echo 'Nadando';
        }
        public function esguichar() {
            echo 'baleia esguichando';
        }
    }

    interface AnimalInterface {
        public function comer();
    }
    // interface que herda de outra interface
    interface AveInterface extends AnimalInterface {
        public function voar();
    }

    // Como papagaio implementa a interface Ave que por sua vez herda de Animal
    // é obrigatório agora implementar os métodos das duas interfaces
    class Papagaio implements AveInterface {
        public function voar() {
            echo 'Voando';
        }
        public function comer() {
            echo 'Comendo'
        }
    }

?>