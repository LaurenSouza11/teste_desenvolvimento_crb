<?php

require ('vendor/autoload.php');

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Username = 'lauren.souza11@gmail.com';
$mail->Password = '37leite98';
$mail->Port = 587;

$mail->setFrom('lauren.souza11@gmail.com');
//$mail->addReplyTo('no-reply@email.com.br');
$mail->addAddress('lauren.souza11@gmail.com', 'Lauren');
//$mail->addAddress('email@email.com.br', 'Contato'’);
//$mail->addCC('email@email.com.br', 'Cópia');
//$mail->addBCC('email@email.com.br', 'Cópia Oculta')

$mail->isHTML(true);
$mail->Subject = 'Cadastro';
$mail->Body    = 'Um novo cliente realizou um cadastro!';
$mail->AltBody = 'Para visualizar essa mensagem acesse http://site.com.br/mail';
//$mail->addAttachment('/tmp/image.jpg', 'nome.jpg');

if(!$mail->send()) {
    echo 'Não foi possível enviar a mensagem.<br>';
    echo 'Erro: ' . $mail->ErrorInfo;
} else {
    echo 'Mensagem enviada.';
}

?>