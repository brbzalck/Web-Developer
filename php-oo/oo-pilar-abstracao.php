<?php 

    // modelo
    class Funcionario {

        // atributos
        public $nome = 'José';
        public $telefone = '11 99999-8888';
        public $numFilhos = 2;

        // métodos
        // função que recupera os atributos da classe e retorna uma str
        function resumirCadFunc() {
            // $this para acessar atributos da classe
            return "$this->nome possui $this->numFilhos filho(s)";
        }

        // função que recebe argumento para modificar num filhos
        function modificarNumFilhos($numMod) {
            $this->numFilhos = $numMod;
        }
    }

    $y = new Funcionario();
    // $instancia(->) para acessar métodos e atributos da classe
    echo $y->resumirCadFunc().'<br/>';

    // jogando para dentro da função numero de filhos atualizado
    $y->modificarNumFilhos(3);
    echo $y->resumirCadFunc().'<br/>';
    echo '<hr>';

    // criando nova instância de funcionário -> novo funcionário = x
    $x = new Funcionario();
    echo $x->resumirCadFunc().'<br/>';
    $x->modificarNumFilhos(1);
    echo $x->resumirCadFunc().'<br/>';

?>