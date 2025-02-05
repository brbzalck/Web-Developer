<?php 

    // modelo
    class Funcionario {

        // atributos
        public $nomePar = null;
        public $telefonePar = null;
        public $numFilhosPar = null;

        // getters setters
        // settando um argumento de setNome() para o atributo da classe $nomePar
        function setNome($nomeArg) {
            $this->nomePar = $nomeArg;
        }
        function setNumFilhos($numFilhosArg) {
            $this->numFilhosPar = $numFilhosArg;
        }

        function setTelefonePar($telefoneArg) {
            $this->telefonePar = $telefoneArg;
        }

        function getNome() {
            return $this->nomePar;
        }

        function getNumFilhosPar() {
            return $this->numFilhosPar;
        }

        function getTelefonePar() {
            return $this->telefonePar;
        }

        // métodos
        // função que recupera os atributos da classe e retorna uma str
        function resumirCadFunc() {
            // $this para acessar atributos da classe
            return "$this->nomePar possui $this->numFilhosPar filho(s)";
        }

        // função que recebe argumento para modificar num filhos
        function modificarNumFilhos($numMod) {
            $this->numFilhosPar = $numMod;
        }
    }

    // criando nova instância de funcionário -> novo funcionário = x
    $y = new Funcionario();
    $y->setNome('José');
    $y->setNumFilhos(3);
    // echo $y->resumirCadFunc();
    // usando as função get que retorna o valor dos atributos do objeto
    echo $y->getNome() . ' possui ' . $y->getNumFilhosPar() . ' filho(s)';
    echo '<br/>';

    // criando nova instância de funcionário -> novo funcionário = x
    $x = new Funcionario();
    $y->setNome('Maria');
    $y->setNumFilhos(0);
    echo $y->getNome() . ' possui ' . $y->getNumFilhosPar() . ' filho(s)';
?>