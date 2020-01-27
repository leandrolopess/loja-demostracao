<?php 

$smarty = new Template();
$info = new Info();

$info->GetInfo();



//Valores para o template
$smarty->assign('CONTATO','Página de Contato');
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());

$smarty->assign('INFO', $info->GetItens());

$email = new EnviarEmail();

// Envio de email de contato
if($_POST){
// Email que vai receber
$destinatarios = array(Config::SITE_EMAIL_ADM);
// Header do email
$assunto = 'Contato Cliente - ' .$_POST['nome']. ' - '. 'Email de contato - '  .$_POST['email'];
// Corpo do email
$msg = $_POST['msg'];
// Função que faz o envio do email com todas as informações
$email->Enviar($assunto, $msg, $destinatarios);
echo "<script>alert('Email enviado com Sucesso!')</script>";
}

			
// Sempre no final
$smarty->display('contato.tpl');
?>