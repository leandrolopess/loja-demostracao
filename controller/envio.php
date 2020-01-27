<!-- Envio do Formulario de contato -->
<?php
// Quem vai receber
$to      = Config::EMAIL_USER;
// Titulo do email
$subject = 'Contato - Loja';
// Mensagem do email, pegando do campo do formulario com o nome colocado no formulario
$message = 'Email de ' .$_GET['nome']. "\r\n" .$_GET['msg'];
// Email de quem enviou
$dest = $_GET['email'];
// Cabeçalho do email com o email de quem enviou
$headers = "From: " .$dest;
mail($to, $subject, $message, $headers);
?>

<script>alert('Email enviado com Sucesso!')</script>
<meta http-equiv="refresh" content="0; url=contato">
