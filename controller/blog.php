<?php 

setlocale(LC_ALL,'pt_BR','pt_BR.utf-8','pt_BR.utf-8','portuguese');

$smarty = new Template();
$blog = new Blog();
$cateblog = new BlogCategorias();


if(isset($_GET['s'])){
$nome = filter_var($_GET['s'], FILTER_SANITIZE_STRING);
$blog->GetBlogBusca($nome);
                
}else{
$blog->GetBlog();	
}



$cateblog->GetBlogCate();

//Valores para o template
$smarty->assign('CONTATO','Página de Contato');
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('GET_HOME', Rotas::get_SiteHOME());
$smarty->assign('BLOG', $blog->GetItens());
$smarty->assign('BLOG_CONTEUDO', Rotas::pag_BlogConteudo());
$smarty->assign('CATEBLOG', $cateblog->GetItens());
$smarty->assign('PAGINAS', $blog->ShowPaginacaoInfinitaBusca());
$smarty->assign('BLOG_TOTAL', $blog->TotalDados());

			
// Sempre no final
$smarty->display('blog.tpl');
?>