<?php

    // criando minha própria classe para manipular erros
    class MinhaExcptionCustomizada extends Exception {
        // atributo privado e vazio para receber valor
        private $erro = '';

        // sempre que houver instância de objeto da minha classe(com argumento)
        public function __construct($erro) {
            // vai pegar esse argumento e atribuir ao atributo privado
            $this->erro = $erro;
        }

        // função para exibir mensagem de erro customizada
        public function exibirMsgErro() {
            // exibi o atributo customizado atribuido pelo método construct
            return $this->erro;
        }

    }

    try {
        // lançando na tela se existir determinado erro
        throw new MinhaExcptionCustomizada('Esse é um erro de teste');

        // caso dê erro catch não deixa o código quebrar
        // atribuindo meu erro para uma variável que por sua vez vira objeto
    } catch (MinhaExcptionCustomizada $e) {
        // utilizando do meu novo objeto o método que exibi apenas a msg customizada
        echo $e->exibirMsgErro();
    }

    // Em quais casos usar Error Exception MinhaExceptionCustomizada
    // Error(php)
    // Exception (programadores)
    // Customizadas (programadores de forma precisa)

?>