<?php 

$smarty = new Template();
$cliente = new Clientes();

//Valores para o template
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('ERRO', '');
$smarty->assign('SHAKE', '');
$smarty->assign('SUCESSO', '');
$login = Rotas::pag_MinhaConta();

if(isset($_POST['cli_email'])){
$cliente->setCli_email($_POST['cli_email']);

if($cliente->GetClienteEmail($cliente->getCli_email()) > 0){
   $novasenha = Sistema::GerarSenha();
   $cliente->SenhaUpdate($novasenha, $cliente->getCli_email());

    $email = new EnviarEmail();

    $assunto = 'Nova Senha - ' .Config::SITE_NOME;
    $msg = "Olá cliente, uma nova senha foi solicitada pra sua conta.";
    $msg .= "<br> Sua nova senha é " . $novasenha;
    $msg .= "<br> <a href='".$login."'>Fazer login</a> ";
    $destinatarios = array($cliente->getCli_email());
    $email->Enviar($assunto, $msg, $destinatarios);

    $smarty->assign('SUCESSO', '<center><div class="col-md-12 col-lg-10"><div class="alert alert-success">Foi enviado uma nova senha para seu email</div></div></center>');
  
  
}else{
   $smarty->assign('ERRO', '<center><div class="col-md-12"><div class="alert alert-danger">Email incorreto, tente novamente</div></div></center>');
   $smarty->assign('SHAKE', 'animated shake');

}
}










// Sempre no final
$smarty->display('recuperar-senha.tpl');
?>