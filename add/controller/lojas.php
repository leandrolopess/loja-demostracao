<?php 

$smarty = new Template();

$info = new Info();


$info->GetInfo();

if(isset($_POST['loja_id'])){
  if($info->Apagar($_POST['loja_id'])){
       echo '<center><div class="col-md-9"><ul class="alert alert-warning margin-top" role="alert">
   <li> Apagando loja...</div></li>
   </ul></center>';
       Rotas::Redirecionar(2, Rotas::pag_Add_Lojas());
       exit();
  }else{
    $smarty->assign('ERRO', '<center><div class="col-md-9"><ul class="woo-error margin-top" role="alert">
   <li> Ocorreu um erro, tente novamente</div></li>
   </ul></center>');
  }
}


$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('GET_SITE_HOME', Rotas::get_SiteHOME());
$smarty->assign('GET_SITE_ADD', Rotas::get_SiteAdd());
$smarty->assign('INFO', $info->GetItens());
$smarty->assign('LOJA_EDITAR', Rotas::pag_Add_LojasEditar());
$smarty->assign('ADICIONAR_LOJA', Rotas::pag_Add_LojasNova());





$smarty->display('add_lojas.tpl');

?>