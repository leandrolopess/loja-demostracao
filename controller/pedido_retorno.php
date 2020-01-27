<?php  

$smarty = new Template();

// chamando a classe de pagamento 
$pag = new PagamentoPS();
$itens = new Itens();
// recebe notificação automática
$pag->Nofificacao();

// pegando a rota com o cod referencia GET
$ref = Rotas::$pag[1];

// pega a transação por REF apos ter efetuado a compra
$pag->BuscarTransacaoREF($ref);

// verifico se tem um COD REF na URL, se não tiver não mostro nada
if(Rotas::$pag[1] == $pag->info['referencia']):
// passo variaveis  para o template 
$smarty->assign('PAGO',      $pag->info['pago']);
$smarty->assign('CODIGO',    $pag->info['codigo']);
$smarty->assign('REF',       $pag->info['referencia']);
$smarty->assign('FORMA_PAG', $pag->info['forma_pag']);
$smarty->assign('PAG_ITENS', Rotas::pag_CLienteItens());
$smarty->assign('SITE_NOME', Config::SITE_NOME);



$itens->GetItensPedido($ref);


// echo '<pre>';    
//          var_dump($itens->GetItens());
//          echo '</pre>';
 
// $pag->UptadeEstoque($itens->GetItens());


// caso o status do pagamento for NAO, mostra novamente o botão de pagar 
  if( $pag->info['pago']=='Pago'):
     
     
      
          $pag->UptadeEstoque($itens->GetItens());
        
          

 endif;  



// chamando o temnplate
$smarty->display('pedido_retorno.tpl');


else:
    
    Rotas::Redirecionar(0, Rotas::get_SiteHOME());
    
endif;

?>