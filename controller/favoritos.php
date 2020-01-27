<?php 

$smarty = new Template();
$favoritos = new Favoritos();

$smarty->assign('ERRO', '');

$favoritos->GetFavoritosID($_SESSION['CLI']['cli_id']);
// Verifica se o usuário está logado
if(Login::Logado()){
   $smarty->assign('USER', $_SESSION['CLI']['cli_nome']);
   $smarty->assign('IMG', $_SESSION['CLI']['cli_img']);
   $smarty->assign('PAG_LOGOFF', Rotas::pag_Logoff());
   $smarty->assign('NOME', Sistema::GetSlug($_SESSION['CLI']['cli_nome']));
   $smarty->assign('SOBRENOME', Sistema::GetSlug($_SESSION['CLI']['cli_sobrenome']));
}


if(isset($_POST['pro_apagar']) && isset($_POST['pro_id_apagar'])){
  if($favoritos->Apagar($_POST['pro_id_apagar'])){
       echo '<center><div class="col-md-9"><ul class="alert alert-warning margin-top" role="alert">
   <li> Apagando favorito, aguarde...</div></li>
   </ul></center>';
        Rotas::Redirecionar(2, Rotas::pag_ClienteFavoritos());
       exit();
  }else{
    $smarty->assign('ERRO', '<center><div class="col-md-9"><ul class="woo-error margin-top" role="alert">
   <li> Ocorreu um erro, tente novamente</div></li>
   </ul></center>');
  }
}



$smarty->assign('LOGADO', Login::Logado());
$smarty->assign('PAG_MINHACONTA', Rotas::pag_ClienteConta());
$smarty->assign('HOME', Rotas::get_SiteHOME());
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('PAG_CLIENTE_PEDIDOS', Rotas::pag_ClientePedidos());
$smarty->assign('FAVORITOS', $favoritos->GetItens());
$smarty->assign('TOTAL_FAVORITOS', $favoritos->TotalDados());
$smarty->assign('PAG_ITENS', Rotas::pag_ClienteItens());
$smarty->assign('PAG_CLIENTE_DADOS', Rotas::pag_ClienteDados());
$smarty->assign('PAG_CLIENTE_SENHA', Rotas::pag_ClienteSenha());
$smarty->assign('PAG_CLIENTE_PERFIL', Rotas::pag_ClientePerfil());
// $smarty->assign('USERNAME', $_SESSION['CLI']['cli_user_name']);
$smarty->assign('GET_HOME', Rotas::get_SiteHOME());
// $smarty->assign('PAGINAS', $pedidos->ShowPaginacao());
$smarty->assign('PAG_CLIENTE_FAVORITOS', Rotas::pag_ClienteFavoritos());
$smarty->assign('PAGINAS', $favoritos->ShowPaginacao());
$smarty->assign('TOTAL', $favoritos->ContagemFavoritos($_SESSION['CLI']['cli_id']));

$smarty->display('cliente_favoritos.tpl');

?>