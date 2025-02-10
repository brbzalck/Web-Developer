<?php

    // importando os arquivos da biblioteca PHPMailer
    require "./bibliotecas/PHPMailer/Exception.php";
    require "./bibliotecas/PHPMailer/OAuth.php";
    require "./bibliotecas/PHPMailer/PHPMailer.php";
    require "./bibliotecas/PHPMailer/POP3.php";
    require "./bibliotecas/PHPMailer/SMTP.php";

    // namespace para pegar as classes que estão dentro da biblioteca
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

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
    if(!$msg->mensagemValida()) {
        echo 'Mensagem não é valida';
        die();
    }

    $mail = new PHPMailer(true);
	try {
            // Configurando o server
			//Server settings
			$mail->SMTPDebug = 2;                      //Enable verbose debug output
			$mail->isSMTP();                                            //Send using SMTP
			// usando host do google
            $mail->Host       = 'smtp.gmail.com.';                     //Set the SMTP server to send through
			$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
			// email de teste
            $mail->Username   = 'cursowebdeveloper64@gmail.com';                     //SMTP username
			// senha gerada para aplicativos menos seguros dentro do e-mail
            $mail->Password   = 'dckb flec awky ckmz';                               //SMTP password
			// usando SMTP tls recomendado pelo google
            $mail->SMTPSecure = 'tls';         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
			// porta 587 também recomendada pela google
            $mail->Port = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

			//Recipients
            // setando e-mail de remetente/destinatario
			$mail->setFrom('cursowebdeveloper64@gmail.com', 'Web Completo remetente');
			$mail->addAddress($msg->__get('para'));     //Add a recipient
			// $mail->addAddress('ellen@example.com');               //Name is optional
			// $mail->addReplyTo('info@example.com', 'Information');
			// $mail->addCC('cc@example.com');
			// $mail->addBCC('bcc@example.com');

			//Attachments
			// $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
			// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

			//Content
			// Configurando assunto e msg do email
            $mail->isHTML(true);                                  //Set email format to HTML
			$mail->Subject = $msg->__get('assunto');
			$mail->Body    = $msg->__get('msg');
			$mail->AltBody = 'É necessário client com HTML';

			$mail->send();
			echo 'E-mail enviado com sucesso';
	} catch (Exception $e) {
			echo "Não foi possivel enviar este e-mail! Por favor tente novamente mais tarde.<br>";
			echo 'Detalhes do erro: ' . $mail->ErrorInfo;
	}

?>