<?php

class Pessoa {
    public $nome = null;

    // método construct é executado AUTOMATICAMENTE ao criar um objeto
    function __construct($nome)
    {
        echo 'objeto iniciado';
        $this->nome = $nome;
    }

    // método construct é executado AUTOMATICAMENTE ao criar um objeto
    function __destruct()
    {
        echo 'objeto removido';
    }

    // $name pode receber qualquer atributo que deseja acessar dentro da classe
    function __get($name)
    {
        return $this->$name;
    }

    function correr() {
        return $this->__get('nome') . ' está correndo';
    }

}

$pessoa = new Pessoa('Jorge');
echo '<br/> Nome: ' . $pessoa->__get('nome');
echo '<br/>' . $pessoa->correr();

echo '<br>';
// destruindo a instância proposital
// unset($pessoa);

?>