<?php 

if(isset($_GET['id'])){
  $id = $_GET['id'];
}



$smarty = new Template();

$info = new Info();


$info->GetInfoLOJA($id);


$smarty->assign('SUCESSO', '');
$smarty->assign('ERRO', '');

$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('GET_SITE_HOME', Rotas::get_SiteHOME());
$smarty->assign('GET_SITE_ADD', Rotas::get_SiteAdd());
$smarty->assign('INFO', $info->GetItens());
$smarty->assign('PAG_LOJAS', Rotas::pag_Add_Lojas());

if(isset($_POST['info_rua']) && isset($_POST['info_numero'])){
$info_rua     = $_POST['info_rua'];
$info_numero     = $_POST['info_numero'];
$info_cidade          = $_POST['info_cidade'];
$info_estado = $_POST['info_estado'];
$info_cep     = $_POST['info_cep'];
$info_telefone     = $_POST['info_telefone'];
$info_whats     = $_POST['info_whats'];
$info_email     = $_POST['info_email'];
$info_face     = $_POST['info_face'];
$info_twitter     = $_POST['info_twitter'];
$info_insta    = $_POST['info_insta'];
$info_loja    = $_POST['info_loja'];

$info->Preparar($info_rua, $info_numero, $info_cidade, $info_estado, $info_cep, $info_telefone, $info_whats, $info_email, $info_face, $info_twitter, $info_insta, $info_loja);

if($info->Alterar($id)){
  echo '<div id="preloader">
         <img class="preloader" src="http://localhost/loja_adaptada/view/assets/images/gif/loading.gif" alt="">
      </div>';
  header("Refresh: 1");
}else{
	echo'<script>alert("Ocorreu um erro, tente novamente")</script>';
	exit();
 }
}





$smarty->display('add_loja_editar.tpl');

?>