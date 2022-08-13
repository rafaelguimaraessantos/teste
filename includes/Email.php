<?php
$nome		= $_POST["nome"];	// Pega o valor do campo nome
$email		= $_POST["email"];	// Pega o valor do campo email
$mensagem	= $_POST["mensagem"];	// Pega os valores do campo mensagem
// var_dump($nome,$email,$mensagem);
// die;
// Variável que junta os valores acima e monta o corpo do email

$Vai 		= "Nome: $nome\n\nE-mail: $email\n\nMensagem: $mensagem\n";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/autoload.php';

define('GUSER', 'cursodecnh@gmail.com');	// <-- Insira aqui o seu GMail
define('GPWD', '7ujmMJU&');		// <-- Insira aqui a senha do seu GMail

function smtpmailer($para, $de, $de_nome, $assunto, $corpo) { 
	global $error;
	$mail = new PHPMailer();
	$mail->IsSMTP();		// Ativar SMTP
	$mail->SMTPDebug = 1;		// Debugar: 1 = erros e mensagens, 2 = mensagens apenas
	$mail->SMTPAuth = true;		// Autenticação ativada
	$mail->SMTPSecure = 'ssl';	// SSL REQUERIDO pelo GMail
	$mail->Host = 'localhost';	// SMTP utilizado
	$mail->Port = 25;  		// A porta 587 deverá estar aberta em seu servidor
	$mail->Username = GUSER;
	$mail->Password = GPWD;
	$mail->SetFrom($de, $de_nome);
	$mail->Subject = $assunto;
	$mail->Body = $corpo;
	$mail->AddAddress($para);
	if(!$mail->Send()) {
		$error = 'Mail error: '.$mail->ErrorInfo; 
		return false;
	} else {
		$error = 'Mensagem enviada!';
		return true;
	}
}

// Insira abaixo o email que irá receber a mensagem, o email que irá enviar (o mesmo da variável GUSER), 

 if (smtpmailer('rafaelguimaraessantos3@gmail.com', 'cursodecnh@gmail.com', 'Nome do Enviador', 'Assunto do Email', $Vai)) {

	Header("index.php"); // Redireciona para uma página de obrigado.

}
if (!empty($error)) echo $error;
?>