<?php 

$smarty = new Template();

$cateblog = new BlogCategorias();

$cateblog->GetBlogCate();

$smarty->assign('SUCESSO', '');
$smarty->assign('ERRO', '');
$smarty->assign('AVISO', '');



$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('GET_SITE', Rotas::get_SiteHOME());
$smarty->assign('GET_SITE_ADD', Rotas::get_SiteAdd());
$smarty->assign('CATEGORIAS', $cateblog->GetItens());

$smarty->assign('PAG_BLOG', Rotas::pag_Add_Blog());


if(isset($_POST['blog_titulo']) && isset($_POST['blog_descricao'])){
$blog_titulo     = $_POST['blog_titulo'];
$blog_descricao     = $_POST['blog_descricao'];
$blog_img          = $_FILES['blog_img']['name'];
$blog_categorias     = $_POST['blog_categorias'];
$blog_status     = $_POST['blog_status'];
$blog_data = Sistema::DataAtualUS();
$blog_autor = $_SESSION['ADM']['user_usuario'];
$blog_url = Sistema::GetSlug($blog_titulo);




if(!empty($_FILES)){
   $upload = new ImageUpload();
   if($upload->Upload(600, 'blog_img', 'blog/')){
     $blog_img = $upload->retorno;
   }else{
   	exit('Erro ao enviar a imagem');
   }
}

 $blog = new Blog();
 $blog->Preparar($blog_titulo, $blog_descricao, $blog_img, $blog_categorias, $blog_status, $blog_data, $blog_autor, $blog_url);

 if($blog->Inserir()){
   $smarty->assign('SUCESSO', '<center><div class="col-md-9"><ul class="woo-sucesso margin-top" role="alert">
    <li> Post adicionado com sucesso!!</div></li>
    </ul></center>');
     Rotas::Redirecionar(1, Rotas::pag_Add_Blog());
 }else{
 	echo'<script>alert("Ocorreu um erro, tente novamente")</script>';
 	exit();
  }

} //if



$smarty->display('add_blog_novo.tpl');

?>