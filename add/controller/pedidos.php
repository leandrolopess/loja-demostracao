<?php 

$smarty = new Template();
$pedidos = new Pedidos();

$smarty->assign('SUCESSO', '');
$smarty->assign('ERRO', '');



if(isset($_POST['ped_apagar'])){
  $ped_cod = $_POST['cod_pedido'];
  if($pedidos->Apagar($ped_cod)){
  	echo '<center><div class="col-md-9"><ul class="woo-sucesso margin-top" role="alert">
   <li> Pedido Excluido </div></li>
   </ul></center>';
  header("Refresh: 0");
  }else{
  	echo '<center><div class="col-md-9"><ul class="alert alert-error margin-top" role="alert">
   <li> Ocorreu um erro, tente novamente</div></li>
   </ul></center>';
  }

}



if(isset(Rotas::$pag[1])){
  $id = (int)Rotas::$pag[1];
  $pedidos->GetPedidosCliente($id);

  }elseif(isset($_POST['data_ini']) and isset($_POST['data_fim'])){
      $pedidos->GetPedidosData($_POST['data_ini'], $_POST['data_fim']);
      $smarty->assign('TOTAL_PEDIDOS','<div class="box padding-20 col-md-9"><p class=" mtext-105 f-20">' .$pedidos->TotalDados(). ' pedidos encontrados  </p></div>');
  }elseif(isset($_POST['txt_ref'])){
        $ref = filter_var($_POST['txt_ref'], FILTER_SANITIZE_STRING);
        $pedidos->GetPedidosREF($ref);
        $smarty->assign('TOTAL_PEDIDOS','');
  }

else{
  $pedidos->GetPedidosCliente();
  $smarty->assign('TOTAL_PEDIDOS','');
}
	

$smarty->assign('GET_SITE_ADD', Rotas::get_SiteAdd());
$smarty->assign('GET_HOME', Rotas::get_SiteHOME());
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('PAG_CLIENTE_PEDIDOS', Rotas::pag_ClientePedidos());
$smarty->assign('PEDIDOS', $pedidos->GetItens());
$smarty->assign('PAG_ITENS', Rotas::pag_Add_Itens());
$smarty->assign('PAGINAS', $pedidos->ShowPaginacao());



if($pedidos->TotalDados() > 0){
	$smarty->display('add_pedidos.tpl');
}else{
	echo '<center><div class="col-9 alert alert-warning margin-top margin-bottom">Nenhum pedido encontrado</div>
  </center>';
}

?>