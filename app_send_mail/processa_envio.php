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
        public $status = ['codigo_status' => null, 'descricao_status' => ''];

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
        header('Location: index.php');
    }

    $mail = new PHPMailer(true);
	try {
            // Configurando o server
			//Server settings
			$mail->SMTPDebug = false;                      //Enable verbose debug output
			$mail->isSMTP();                                            //Send using SMTP
			// usando host do google
            $mail->Host = 'smtp.gmail.com.';                     //Set the SMTP server to send through
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
            // caso de tudo certo, codigo_status = 1 que por sua vez executa html da linha 136
            $msg->status['codigo_status'] = 1;
            $msg->status['descricao_status'] = 'E-mail enviado com sucesso';


			// echo 'E-mail enviado com sucesso';
	} catch (Exception $e) {

        // caso de erro, código de status = 2 
        $msg->status['codigo_status'] = 2;
        $msg->status['descricao_status'] = 'Não foi possivel enviar este e-mail! Por favor tente novamente mais tarde. Detalhes do erro: ' . $mail->ErrorInfo;;

        // futuramente pode haver alguma lógica para armazenar msgs de erro
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>App Mail Send</title>
    <!-- colocando bootstrap para fazer o layout -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <!-- Div send email com bstrap que fica em cima -->
    <div class="container">
        <div class="py-3 text-center">
			<img class="d-block mx-auto mb-2" src="logo.png" alt="" width="72" height="72">
			<h2>Send Mail</h2>
			<p class="lead">Seu app de envio de e-mails particular!</p>
		</div>
        <!-- div que decide se vai dar sucesso ou erro -->
        <div class="row">
            <div class="col-md-12">
                <!-- se a codigo_status == 1(armazenado no atributo status) executa html sucesso -->
                <?php if($msg->status['codigo_status'] == 1) { ?>

                    <div class="container" align="center">
                        <h1 class="display-4 text-success">Sucesso</h1>
                        <p><?= $msg->status['descricao_status'] ?></p>
                        <a href="index.php" class="btn btn-success btn-lg mt-5 text-white">Voltar</a>
                    </div>
                <!-- fechando condicional if -->
                <?php } ?>
                <!-- se a codigo_status == 2(armazenado no atributo status) executa html erro -->
                <?php if($msg->status['codigo_status'] == 2) { ?>
                    <div class="container" align="center">
                        <h1 class="display-4 text-danger">Ops!</h1>
                        <p><?= $msg->status['descricao_status'] ?></p>
                        <a href="index.php" class="btn btn-success btn-lg mt-5 text-white">Voltar</a>
                    </div>
                <!-- fechando condicional if -->
                <?php } ?>
            </div>
        </div>
    </div>
</body>
</html>