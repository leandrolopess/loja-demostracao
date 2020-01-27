<?php 

$smarty = new Template();


$smarty->assign('SUCESSO', '');
$smarty->assign('ERRO', '');
$smarty->assign('AVISO', '');

$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('GET_SITE_HOME', Rotas::get_SiteHOME());
$smarty->assign('PAG_LOJAS', Rotas::pag_Add_Lojas());
$smarty->assign('GET_SITE_ADD', Rotas::get_SiteAdd());

if(isset($_POST['info_loja']) && isset($_POST['info_rua'])){
$info_rua     = $_POST['info_rua'];
$info_numero      = $_POST['info_numero'];
$info_cidade     = $_POST['info_cidade'];
$info_estado     = $_POST['info_estado'];
$info_cep      = $_POST['info_cep'];
$info_telefone     = $_POST['info_telefone'];
$info_whats      = $_POST['info_whats'];
$info_email      = $_POST['info_email'];
$info_face     = $_POST['info_face'];
$info_twitter     = $_POST['info_twitter'];
$info_insta     = $_POST['info_insta'];
$info_loja      = $_POST['info_loja'];




$info = new Info();
$info->Preparar($info_rua, $info_numero, $info_cidade, $info_estado, $info_cep, $info_telefone, $info_whats, $info_email, $info_face, $info_twitter, $info_insta, $info_loja,);

if($info->Inserir()){
  $smarty->assign('SUCESSO', '<center><div class="col-md-9"><ul class="woo-sucesso margin-top" role="alert">
   <li> Loja adicionada!!</div></li>
   </ul></center>');
    Rotas::Redirecionar(1, Rotas::pag_Add_Lojas());
}else{
	echo'<script>alert("Ocorreu um erro, tente novamente")</script>';
	exit();
 }
}

















$smarty->display('add_loja_adicionar.tpl');

?>