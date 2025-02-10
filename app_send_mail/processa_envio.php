<?php

    require "./bibliotecas/PHPMailer/Exception.php";
    require "./bibliotecas/PHPMailer/OAuth.php";
    require "./bibliotecas/PHPMailer/PHPMailer.php";
    require "./bibliotecas/PHPMailer/POP3.php";
    require "./bibliotecas/PHPMailer/SMTP.php";

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
			//Server settings
			$mail->SMTPDebug = 2;                      //Enable verbose debug output
			$mail->isSMTP();                                            //Send using SMTP
			$mail->Host       = 'smtp.example.com';                     //Set the SMTP server to send through
			$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
			$mail->Username   = 'user@example.com';                     //SMTP username
			$mail->Password   = 'secret';                               //SMTP password
			$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
			$mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

			//Recipients
			$mail->setFrom('from@example.com', 'Mailer');
			$mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient
			$mail->addAddress('ellen@example.com');               //Name is optional
			$mail->addReplyTo('info@example.com', 'Information');
			$mail->addCC('cc@example.com');
			$mail->addBCC('bcc@example.com');

			//Attachments
			$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
			$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

			//Content
			$mail->isHTML(true);                                  //Set email format to HTML
			$mail->Subject = 'Here is the subject';
			$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
			$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

			$mail->send();
			echo 'Message has been sent';
	} catch (Exception $e) {
			echo "Não foi possivel enviar este e-mail! Por favor tente novamente mais tarde.<br>";
			echo 'Detalhes do erro: ' . $mail->ErrorInfo;
	}

?>