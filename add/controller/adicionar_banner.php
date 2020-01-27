<?php 

$smarty = new Template();


$smarty->assign('SUCESSO', '');
$smarty->assign('ERRO', '');
$smarty->assign('AVISO', '');

$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('GET_SITE_HOME', Rotas::get_SiteHOME());
$smarty->assign('PAG_BANNERS', Rotas::pag_Banners());
$smarty->assign('GET_SITE_ADD', Rotas::get_SiteAdd());

if(isset($_POST['banner_titulo']) && isset($_POST['banner_ordem'])){
$banner_titulo      = $_POST['banner_titulo'];
$banner_descricao = $_POST['banner_descricao'];
$banner_img          = $_FILES['banner_img']['name'];
$banner_ordem  = $_POST['banner_ordem'];


if(!empty($_FILES)){
   $upload = new ImageUpload();
   if($upload->Upload(900, 'banner_img', 'banners/')){
     $banner_img = $upload->retorno;
   }else{
   	exit('Erro ao enviar a imagem');
   }
}

$banner = new Banner();
$banner->Preparar($banner_titulo, $banner_descricao, $banner_ordem, $banner_img);

if($banner->Inserir()){
  $smarty->assign('SUCESSO', '<center><div class="col-md-9"><ul class="woo-sucesso margin-top" role="alert">
   <li> Banner adicionado!!</div></li>
   </ul></center>');
    Rotas::Redirecionar(1, Rotas::pag_Banners());
}else{
	echo'<script>alert("Ocorreu um erro, tente novamente")</script>';
	exit();
 }
}

















$smarty->display('add_adicionar_banner.tpl');

?>