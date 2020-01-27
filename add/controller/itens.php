<?php 

$smarty = new Template();

if(!isset($_POST['cod_pedido'])){
   Rotas::Redirecionar(1, Rotas::pag_Add_Pedidos());
   exit();
}

$itens = new Itens();
$pedido = filter_var($_POST['cod_pedido'], FILTER_SANITIZE_STRING);

$itens->GetItensPedido($pedido);

$smarty->assign('ITENS', $itens->GetItens());
$smarty->assign('TOTAL', Sistema::MoedaBR($itens->GetTotal()));
$smarty->assign('TOTAL_PEDIDO', Sistema::MoedaBR($itens->TotalPedido()));
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());







$smarty->display('add_itens.tpl');

?>