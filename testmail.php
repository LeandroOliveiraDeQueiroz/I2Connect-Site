<?php
if(!isset($_POST['submit'])){
    echo "error, you need to submit the form";
}

// ini_set('display_errors', 1);

// error_reporting(E_ALL);

$name = $_POST['name'];
$user_email = $_POST['email'];
$message = $_POST['message'];

if(empty($name) || empty($user_email)){
    echo "Name and email are mandatory!";
    exit;
}

// $email_fomr

$from = "contato@inbovis.com.br"; // Email that send the message on header
$to = "contato@inbovis.com.br"; // Email that wil recive the message
$headers = "De: $from \r\n";
$subject = "Verificando o correio do PHP 2.0 por $name"; // Equals topic

$email_body = "Novo email enviado a partir do site inbovis.com.br.\n".
                "Usuario: $name\n".
                "Email: $user_email\n".
                "Mensagem:\n $message";



mail($to, $subject, $email_body, $headers);

echo "A mensagem de e-mail foi enviada.";

?>