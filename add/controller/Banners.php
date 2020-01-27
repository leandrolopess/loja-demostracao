<?php 

$smarty = new Template();

$Banner = new Banner();


$Banner->GetBanners();





$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());

$smarty->assign('GET_SITE_HOME', Rotas::get_SiteHOME());

$smarty->assign('PAG_PEDIDOS', Rotas::pag_Add_Pedidos());
$smarty->assign('PRO_INFO', Rotas::pag_ProdutosInfo());
// $smarty->assign('PRO_TOTAL', $produtos->TotalDados());
// $smarty->assign('PAGINAS', $produtos->ShowPaginacao());
$smarty->assign('BANNERS', $Banner->GetItens());
$smarty->assign('ADICIONAR_BANNER', Rotas::pag_Adicionar_Banner());
$smarty->assign('GET_SITE_ADD', Rotas::get_SiteAdd());
$smarty->assign('PAG_BANNER_EDITAR', Rotas::pag_Editar_Banner());







$smarty->display('add_banners.tpl');

?>