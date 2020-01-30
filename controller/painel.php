<?php 
// Conta Cliente
$smarty = new Template();

//Login::MenuCliente();

$smarty->assign('USER', '');
// Verifica se o usuário está logado
if(Login::Logado()){
   $smarty->assign('USER', $_SESSION['CLI']['cli_nome']);
   $smarty->assign('IMG', $_SESSION['CLI']['cli_img']);
   $smarty->assign('PAG_LOGOFF', Rotas::pag_Logoff());
}
if(Login::Logado() == FALSE){
    $site_tema = Config::GET_TEMA;
echo '<div id="preloader">
<img class="preloader" src="'.$site_tema.'/assets/images/gif/loading.gif" alt="">
    </div>';
Rotas::Redirecionar(0, Rotas::pag_MinhaConta());
}

$smarty->assign('GET_HOME', Rotas::get_SiteHOME());
$smarty->assign('LOGADO', Login::Logado());
$smarty->assign('PAG_MINHACONTA', Rotas::pag_ClienteConta());
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('PAG_CLIENTE_PEDIDOS', Rotas::pag_ClientePedidos());
$smarty->assign('PAG_CLIENTE_DADOS', Rotas::pag_ClienteDados());
$smarty->assign('PAG_CLIENTE_SENHA', Rotas::pag_ClienteSenha());
$smarty->assign('PAG_CLIENTE_PERFIL', Rotas::pag_ClientePerfil());
$smarty->assign('PAG_CLIENTE_FAVORITOS', Rotas::pag_ClienteFavoritos());


$smarty->display('minha-conta.tpl');

?>