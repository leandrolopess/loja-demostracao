<?php 

$smarty = new Template();
$pedidos = new Pedidos();

$pedidos->GetPedidosCliente();
// Verifica se o usuário está logado
if(Login::Logado()){
   $smarty->assign('USER', $_SESSION['CLI']['cli_nome']);
   $smarty->assign('IMG', $_SESSION['CLI']['cli_img']);
   $smarty->assign('PAG_LOGOFF', Rotas::pag_Logoff());
}
if(!isset($_POST['cod_pedido'])){
   Rotas::Redirecionar(1, Rotas::pag_ClientePedidos());
   exit();
}

$itens = new Itens();
$pedido = filter_var($_POST['cod_pedido'], FILTER_SANITIZE_STRING);

$itens->GetItensPedido($pedido);

$smarty->assign('ITENS', $itens->GetItens());
$smarty->assign('TOTAL', Sistema::MoedaBR($itens->GetTotal()));
$smarty->assign('TOTAL_PEDIDO', Sistema::MoedaBR($itens->TotalPedido()));


$smarty->assign('LOGADO', Login::Logado());
$smarty->assign('PAG_MINHACONTA', Rotas::pag_ClienteConta());
$smarty->assign('GET_HOME', Rotas::get_SiteHOME());
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('PAG_CLIENTE_PEDIDOS', Rotas::pag_ClientePedidos());
$smarty->assign('PEDIDOS', $pedidos->GetItens());
$smarty->assign('PAG_ITENS', Rotas::pag_ClienteItens());
$smarty->assign('PAG_CLIENTE_PERFIL', Rotas::pag_ClientePerfil());
$smarty->assign('PAG_CLIENTE_DADOS', Rotas::pag_ClienteDados());
$smarty->assign('PAG_CLIENTE_SENHA', Rotas::pag_ClienteSenha());
$smarty->assign('PAG_CLIENTE_FAVORITOS', Rotas::pag_ClienteFavoritos());


// caso o status do pagamento for NAO, mostra novamente o botão de pagar 
 if($itens->GetItens()[1]['ped_pag_status']=='Cancelado'):
     
       // PAGAMENTO PS --------------------------

         $pag = new PagamentoPS();
      
         $pag->PagamentoITENS($_SESSION['CLI'], $itens->GetItens()[1], $itens->GetItens());
        
//         echo '<pre>';    
//         var_dump($itens->GetItens());
//         echo '</pre>';
            
              // passando para o template dados do PS
              $smarty->assign('PS_URL', $pag->psURL);            
              $smarty->assign('PS_COD', $pag->psCod);
              $smarty->assign('PS_SCRIPT', $pag->psURL_Script);
              $smarty->assign('REF',$pedido);
              $smarty->assign('PAG_RETORNO', Rotas::pag_PedidoRetorno());
              $smarty->assign('PAG_ERRO', Rotas::pag_PedidoRetornoERRO());
              $smarty->assign('TEMA', Rotas::get_SiteTEMA());
             
   /// fim do pagamento            

 endif;


$smarty->display('cliente_itens.tpl');

?>