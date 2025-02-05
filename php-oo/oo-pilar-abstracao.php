<?php 

    // modelo
    class Funcionario {

        // atributos
        public $nomePar = null;
        public $telefonePar = null;
        public $numFilhosPar = null;
        public $cargo = null;
        public $salario = null;

        // getters setters (overloading / sobrecarregar)
        function __set($name, $value)
        {
            $this->$name = $value;
        }

        function __get($name)
        {
            return $this->$name;
        }

        // settando um argumento de setNome() para o atributo da classe $nomePar
        // function setNome($nomeArg) {
        //     $this->nomePar = $nomeArg;
        // }
        // function setNumFilhos($numFilhosArg) {
        //     $this->numFilhosPar = $numFilhosArg;
        // }

        // function setTelefonePar($telefoneArg) {
        //     $this->telefonePar = $telefoneArg;
        // }

        // // criando método da class Funcionario que retorna nomePar setado acima
        // function getNome() {
        //     return $this->nomePar;
        // }

        // function getNumFilhosPar() {
        //     return $this->numFilhosPar;
        // }

        // function getTelefonePar() {
        //     return $this->telefonePar;
        // }

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

    // criando nova instância de funcionário -> novo funcionário = y
    $y = new Funcionario();
    // funcionário criado, agora tem acesso a todos métodos da classe
    $y->__set('nomePar', 'Barbosa');
    $y->__set('numFilhosPar', 0);
    $y->__set('telefonePar', '(24)99844-3367');
    $y->__set('cargo', 'Cabo');
    $y->__set('salario', 3500);
    // echo $y->resumirCadFunc();
    // usando as função get que retorna o valor dos atributos do objeto
    echo $y->__get('cargo') .' '. $y->__get('nomePar') . ' possui ' . $y->__get('numFilhosPar') . ' filho(s), recebe '.
    $y->__get('salario'). ' e seu telefone para contato é: '. $y->__get('telefonePar') ;
    echo '<br/>';

    // criando nova instância de funcionário -> novo funcionário = x
    $x = new Funcionario();
    $x->__set('nome', 'Maria');
    $x->__set('numFilhos', 1);
    echo $x->__get('nome') . ' possui ' . $x->__get('numFilhos') . ' filho(s)';
?>