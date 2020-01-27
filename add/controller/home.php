<?php 

$smarty = new Template();
$smarty->assign('LOGADO', Login::LogadoADM());
$smarty->assign('PAG_MINHACONTA', Rotas::pag_MinhaConta());
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('PAG_PRODUTOS', Rotas::pag_Add_Produtos());
$smarty->assign('PAG_CLIENTES', Rotas::pag_Add_Clientes());
$smarty->assign('GET_SITE_HOME', Rotas::get_SiteHOME());
$smarty->assign('PAG_SUBCATEGORIAS', Rotas::pag_Add_Subcategorias());
$smarty->assign('PAG_PEDIDOS', Rotas::pag_Add_Pedidos());
$smarty->assign('LOGOFF', Rotas::pag_LogoffADM());
$smarty->assign('SENHA', Rotas::pag_SenhaADM());
$smarty->assign('PAG_BLOG', Rotas::pag_Add_Blog());

if(Login::LogadoADM()){
	$smarty->assign('USER', $_SESSION['ADM']['user_nome']);
	$smarty->assign('DATA', $_SESSION['ADM']['user_data']);
	$smarty->assign('HORA', $_SESSION['ADM']['user_hora']);
	$smarty->assign('SOBRENOME', $_SESSION['ADM']['user_sobrenome']);
}





//$smarty->display('./inc/top-painel.tpl');
//$smarty->display('./inc/header.tpl');
$smarty->display('add_home.tpl');
//$smarty->display('./inc/footer.tpl');
?>