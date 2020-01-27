<?php 

$smarty = new Template();

//if(Login::Logado() == FALSE){

//Rotas::Redirecionar(0, Rotas::pag_MinhaConta());
//}

$smarty->assign('LOGADO', Login::Logado());
$smarty->assign('PAG_MINHACONTA', Rotas::pag_MinhaConta());
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('PAG_PRODUTOS', Rotas::pag_Add_Produtos());
$smarty->assign('PAG_CLIENTES', Rotas::pag_Add_Clientes());
$smarty->assign('GET_SITE_HOME', Rotas::get_SiteHOME());
$smarty->assign('PAG_CATEGORIAS', Rotas::pag_Add_Categorias());
$smarty->assign('PAG_PEDIDOS', Rotas::pag_Add_Pedidos());


//$smarty->display('./inc/top-painel.tpl');
//$smarty->display('./inc/header.tpl');
$smarty->display('add_categorias.tpl');
//$smarty->display('./inc/footer.tpl');
?>