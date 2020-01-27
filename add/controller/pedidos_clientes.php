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
  $id = Rotas::$pag[1];
  $pedidos->GetPedidosCliente($id);
}elseif(isset($_POST['data_ini']) and isset($_POST['data_fim'])){
      $pedidos->GetPedidosData($_POST['data_ini'], $_POST['data_fim']);
  }elseif(isset($_POST['txt_ref'])){
        $ref = filter_var($_POST['txt_ref'], FILTER_SANITIZE_STRING);
        $pedidos->GetPedidosREF($ref);
  }


$smarty->assign('GET_HOME', Rotas::get_SiteHOME());
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('PAG_CLIENTES', Rotas::pag_Add_Clientes());
$smarty->assign('PEDIDOS', $pedidos->GetItens());
$smarty->assign('PAG_ITENS', Rotas::pag_Add_Itens());
$smarty->assign('CLI_ID', $id);
$smarty->assign('PAGINAS', $pedidos->ShowPaginacao());


if($pedidos->TotalDados() > 0){
	$smarty->display('add_pedidos_clientes.tpl');
}else{
	echo '<center><div class="col-9 alert alert-warning margin-top-30 margin-bottom">Nenhum pedido encontrado para este cliente</div>
  <a href="http://localhost/loja_adaptada/add/clientes?p=1" class="btn bg-azul branco margin-bottom">Voltar</a>

  </center>';
}



?>