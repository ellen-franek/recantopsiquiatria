<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

$mail = new PHPMailer();
$mail->CharSet = "UTF-8";
// Define os dados do servidor e tipo de conexão
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

$mail->IsSMTP(true); // Define que a mensagem será SMTP
$mail->Host = "mail.recantopsiquiatria.com.br"; // Endereço do servidor SMTP
$mail->Port = 465;
$mail->SMTPAuth = true; // Usa autenticação SMTP? (opcional)
$mail->SMTPSecure = 'ssl';
$mail->Username = 'contato@recantopsiquiatria.com.br'; // Usuário do servidor SMTP
$mail->Password = 'Recanto..2020@'; // Senha do servidor SMTP

$mail->isHTML(true);
//Recipients
$mail->setFrom('contato@recantopsiquiatria.com.br', 'Recanto');
$mail->addAddress('29661785.85427@parser.amocrm.com');


$mail->Subject  = "Clínica Hospitalar Recanto"; // Assunto da mensagem
$mensagem = "<strong>Nome: </strong>" . $_POST['name-contact'] . "<br>";
$mensagem .= "<strong>E-mail: </strong>" . $_POST['email-contact'] . "<br>";
$mensagem .= "<strong>Telefone: </strong>" . $_POST['phone-contact'] . "<br>";
$mensagem .= "<strong>Especialidade: </strong>" . $_POST['select-especialidades'] . "<br>";
$mensagem .= "<strong>Origem: </strong>site_recantopsiquiatria<br>";

$mail->Body = $mensagem;

// Envie a mensagem, verifica se há erros
if (!$mail->send()) {
    echo "Erro do Mailer: " . $mail->ErrorInfo;
} else {
    header('Location: ./obrigado.php');
    // print('success');
}