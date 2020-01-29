<?php 

if(isset($_SESSION['PRO'])){

$smarty = new Template();

$carrinho = new Carrinho();
$info = new Info();
$info->GetInfoLOJA(1);

$smarty->assign('PRO', $carrinho->GetCarrinho());
$smarty->assign('TOTAL', Sistema::MoedaBR($carrinho->GetTotal()));
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('GET_HOME', Rotas::get_SiteHOME());
$smarty->assign('PAG_CARRINHO_ALTERAR', Rotas::pag_CarrinhoAlterar());
$smarty->assign('INFO', $info->GetItens());

$smarty->assign('CORREIO', 'http://www.buscacep.correios.com.br/sistemas/buscacep/buscaCepEndereco.cfm');
$smarty->assign('PESO', $carrinho->GetPeso());

// Envio do CEP
if($_POST){ 
require 'controller/calculando-frete.php';
$origem = $info->InfoCep();
$destino = $_POST['destino'];
$peso    = $_POST['peso_frete'];
$servico = $_POST['servico'];
$_resultado = calculaFrete( 
$servico, 
$origem, 
$destino, 
$peso, 0 );


$smarty->assign('REAL', '$');
$smarty->assign('SERVICO', $servico. ':');
$smarty->assign('PRAZO', $_resultado['prazo']);
$smarty->assign('VALOR_FRETE', $_resultado['valor']);
$smarty->assign('VALOR_USA', Sistema::moedaPhp($_resultado['valor']));
$smarty->assign('CEP', $destino = $_POST['destino']);
$smarty->assign('ENVIO', $_POST);
$count = strlen($destino);
$smarty->assign('VERIFICA', $count = strlen($destino));
$smarty->assign('ERRO', '* Digite os 8 números do CEP');
$smarty->assign('ERRO_2', '* CEP incorreto, tente novamente');
$smarty->assign('ERRO_3', '');
}else{
$smarty->assign('VALOR_FRETE', '');
$smarty->assign('CEP', '');
$smarty->assign('SERVICO', '');
$smarty->assign('VERIFICA', '');
$smarty->assign('PRAZO', '');
$count = '';
$smarty->assign('ERRO', '');
$smarty->assign('ERRO_2', '');
$smarty->assign('ENVIO', '');
$smarty->assign('ERRO_3', '* Selecione o tipo de envio e clique em atualizar total');
$_resultado['valor'] = 0;
}

$login = new Login();
if(Login::Logado()){
$smarty->assign('CEP', $_SESSION['CLI']['cli_cep']);
}

$valor_frete = Sistema::moedaPhp($_resultado['valor']);


$smarty->assign('PAG_CONFIRMAR', Rotas::pag_PedidoConfirmar());
$smarty->assign('TOTAL_COM_FRETE', Sistema::MoedaBR($carrinho->GetTotal() + $valor_frete));


$smarty->display('carrinho.tpl');
}else{
	$site_home = Config::SITE_HOME;
	echo '<div class="not txt-center margin-bottom margin-top">
<h4 class="margin-bottom-10">Seu carrinho está vazio!!</h4>
<a href="'.$site_home.'" class="continuar-btn">Voltar para a loja</a>
</div>';
}
?>