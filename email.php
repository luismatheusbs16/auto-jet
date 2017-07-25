<?php

$nome       =   $_POST["nome"];
$email      =   $_POST["email"];
$telefone   =   $_POST["telefone"];
$mensagem   =   $_POST["mensagem"];

include("class.phpmailer.php");
include("class.smtp.php");

$mail = new PHPMailer();

$mail->SMTP_PORT = "587";
$mail->SMTPSecure = "tls";

$mail->IsSMTP()
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;

$mail->Username = 'luismatheusbs@gmail.com';
$mail->Password = 'choppy2015'

$mail->From = $email;
$mail->FromName = $nome;

$mail->AddAddress($email, $nome);
$mail->AddCC('luismatheusbs@gmail.com', 'Auto-Jet');

$mail->IsHTML(true);  

$mail->Subject = "Mensagem Enviada de AutoJet - Serviços Automotivos";
$mail->Body = $mensagem;

if ($enviado) {
    echo "Email Enviado com Sucesso";
}   else { 
    echo "Não foi Posssivel Enviar sua Mensagem";
}

?>




