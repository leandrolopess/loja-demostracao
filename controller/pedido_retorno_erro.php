<?php 

// chamando o objeto do template
$smarty = new Template();
// $pedido = new Pedidos();
// recebo o cod de referencia via URL
$ref = Rotas::$pag[1];
// passo variaveis para o template
$smarty->assign('REF', $ref);
$smarty->assign('PAG_ITENS', Rotas::pag_CLienteItens());

// if(isset(Rotas::$pag[1])){
// $pedido->PedidoUpdateStatus($ref);
// }

// mostrando o template
$smarty->display('pedido_retorno_erro.tpl');

?>