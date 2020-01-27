<?php 

setlocale(LC_ALL,'pt_BR','pt_BR.utf-8','pt_BR.utf-8','portuguese');

$smarty = new Template();
$blog = new Blog();
$cateblog = new BlogCategorias();

if(isset($_POST['id'])){
$id = $_POST['id'];
}else{
$id = '';
}

$blog->GetBlogID($id);
$cateblog->GetBlogCate();
$blog->BlogView($id);

if(isset($_POST['titulo'])){
$titulo = $_POST['titulo'];
}
if(isset($_POST['categoria'])){
$categoria = $_POST['categoria'];
}
$url = Rotas::$pag[1];
$BlogRelacionados = new BlogRelacionados();
$BlogRelacionados->GetBlogRelacionados($titulo, $categoria);



//Valores para o template
$smarty->assign('CONTATO','Página de Contato');
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('GET_HOME', Rotas::get_SiteHOME());
$smarty->assign('BLOG', $blog->GetItens());
$smarty->assign('RELACIONADOS', $BlogRelacionados->GetItens());
$smarty->assign('PAG_BLOG', Rotas::pag_Blog());
$smarty->assign('CATEBLOG', $cateblog->GetItens());
$smarty->assign('PAG_CONTEUDO', Rotas::pag_BlogConteudo());

			
// Sempre no final
$smarty->display('blog_conteudo.tpl');
?>