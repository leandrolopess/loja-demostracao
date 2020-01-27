<?php 

if(isset($_SESSION['PRO'])){

	// Verifica se foi selecionado o tipo de envio
	if(!isset($_POST['frete_radio'])){
		Rotas::Redirecionar(1, Rotas::pag_Carrinho());
		exit();
	}




$smarty = new Template();
$pagamento = new PagamentoPS();


$carrinho = new Carrinho();
$smarty->assign('PRO', $carrinho->GetCarrinho());
$_SESSION['PED']['frete'] = $_POST['frete_radio'];
$_SESSION['PED']['total_com_frete'] = ($_POST['frete_radio'] + $carrinho->GetTotal());



$smarty->assign('TOTAL', Sistema::MoedaBR($carrinho->GetTotal()));
$smarty->assign('TOTAL', Sistema::MoedaBR($carrinho->GetTotal()));
$smarty->assign('FRETE', Sistema::MoedaBR($_SESSION['PED']['frete']));
$smarty->assign('TOTAL_FRETE', Sistema::MoedaBR($_SESSION['PED']['total_com_frete']));
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('GET_HOME', Rotas::get_SiteHOME());
$smarty->assign('PAG_CARRINHO_ALTERAR', Rotas::pag_CarrinhoAlterar());
$smarty->assign('PAG_CARRINHO', Rotas::pag_Carrinho());
$smarty->assign('PAG_FINALIZAR', Rotas::pag_PedidoFinalizar());

// $pagamento->UptadeEstoque($carrinho->GetCarrinho());




$smarty->display('confirmar.tpl');

}else{
	echo '<div class="not txt-center margin-bottom">
<h4 class="margin-bottom-10">Seu carrinho está vazio!!</h4>
<a href="http://localhost/loja/" class="continuar-btn">Voltar para a loja</a>
</div>';
}




?>