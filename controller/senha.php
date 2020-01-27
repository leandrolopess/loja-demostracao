<?php 

$smarty = new Template();
$pedidos = new Pedidos();

$smarty->assign('ERRO', '');
$smarty->assign('SHAKE', '');
$smarty->assign('SUCESSO', '');
$smarty->assign('PAG_MINHACONTA', Rotas::pag_ClienteConta());
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('PAG_CLIENTE_PEDIDOS', Rotas::pag_ClientePedidos());
$smarty->assign('PAG_CLIENTE_DADOS', Rotas::pag_ClienteDados());
$smarty->assign('PAG_CLIENTE_SENHA', Rotas::pag_ClienteSenha());
$smarty->assign('PAG_CLIENTE_PERFIL', Rotas::pag_ClientePerfil());
$smarty->assign('PAG_CLIENTE_FAVORITOS', Rotas::pag_ClienteFavoritos());
$smarty->assign('GET_HOME', Rotas::get_SiteHOME());

$pedidos->GetPedidosCliente();
// Verifica se o usuário está logado
if(Login::Logado()){
   $smarty->assign('USER', $_SESSION['CLI']['cli_nome']);
   $smarty->assign('IMG', $_SESSION['CLI']['cli_img']);
   $smarty->assign('PAG_LOGOFF', Rotas::pag_Logoff());
}

if(isset($_POST['cli_senha_atual']) and isset($_POST['cli_senha'])){

	$senha_atual = md5($_POST['cli_senha_atual']);
	$senha_nova = $_POST['cli_senha'];
	$email = $_SESSION['CLI']['cli_email'];

	if($senha_atual != $_SESSION['CLI']['cli_pass']){
        $smarty->assign('ERRO', '<div class="col-md-7 alert-dados"><div class="alert alert-danger">A senha atual está incorreta, tente novamente</div></div>');
     // exit();
	}else{
		$clientes = new Clientes();
		$clientes->SenhaUpdate($senha_nova, $email);
		
		$login = new Login();
     	$login->GetLogin($email, $senha_nova);
		Rotas::Redirecionar(1, Rotas::pag_ClienteSenha());
		$smarty->assign('SUCESSO', '<div class="col-md-7 alert-dados"><div class="alert alert-success">Senha alterada com sucesso!! </div></div>');
	}

	

}else{

}













$smarty->display('cliente_senha.tpl');

?>