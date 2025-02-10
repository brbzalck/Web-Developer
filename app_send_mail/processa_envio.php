<?php

    // importando os arquivos da biblioteca PHPMailer
    require "../../../app_send_mail/bibliotecas/PHPMailer/Exception.php";
    require "../../../app_send_mail/bibliotecas/PHPMailer/OAuth.php";
    require "../../../app_send_mail/bibliotecas/PHPMailer/PHPMailer.php";
    require "../../../app_send_mail/bibliotecas/PHPMailer/POP3.php";
    require "../../../app_send_mail/bibliotecas/PHPMailer/SMTP.php";

    
    // faz a requisição do verdadeiro processo_envio.php
    require "../../../app_send_mail/processa_envio.php";
?>