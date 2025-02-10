<?php

    class Mensagem {
        // atributos da classe que serão utilizados pelo input do front
        private $para = null;
        private $assunto = null;
        private $msg = null;

        // método get que pega o atributo de forma dinâmica
        public function __get($atributo) {
            return $this->$atributo;
        }

        // metodo set para setar valor em atributo de forma dinâmica
        public function __set($atributo, $value) {
            $this->$atributo = $value;
        }

        // método que valida a mensagem
        public function mensagemValida() {
            // se algum dos atributos estiverem vazios retorna false.
            if(empty($this->para) or empty($this->assunto) or empty($this->msg)) {
                return false;
            } 
            // ou então se todos estiverem preenchidos, retorna true
            return true;

        }
    }

    $msg = new Mensagem();

    // usando o método __set para settar os dados que vem do input do front $_POST nos atributos da classe
    $msg->__set('para', $_POST['para']);
    // __set pega $atributo da classe e seta o $valor contido em $_POST
    $msg->__set('assunto', $_POST['assunto']);
    // a super global $_POST pega os valores pelos índices $_POST['msg'] -> que é definida em name='msg' no front
    $msg->__set('msg', $_POST['msg']);

    // print_r($msg);

    // condicional que verifica se o formulário é valido ou não
    if($msg->mensagemValida()) {
        echo 'Mensagem é valida';
    } else {
        echo 'Mensagem não é válida';
    }

?>