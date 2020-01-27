<?php 

$smarty = new Template();
$clientes = new Clientes();
$clientes->GetClientes();

$smarty->assign('GET_SITE_ADD', Rotas::get_SiteAdd());
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('CLIENTES', $clientes->GetItens());
$smarty->assign('PAG_EDITAR', Rotas::pag_Add_ClientesEditar());
$smarty->assign('PAG_PEDIDOS', Rotas::pag_Add_PedidosCliente());
$smarty->assign('PAGINAS', $clientes->ShowPaginacao());

// $smarty->display('./inc/top-painel.tpl');
//$smarty->display('./inc/header.tpl');
$smarty->display('add_clientes.tpl');
//$smarty->display('./inc/footer.tpl');
?>