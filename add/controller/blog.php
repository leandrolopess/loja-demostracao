<?php 

$smarty = new Template();
$blog = new Blog();

$blog->GetBlogTodos();

$smarty->assign('GET_SITE', Rotas::get_SiteHOME());
$smarty->assign('GET_SITE_ADD', Rotas::get_SiteAdd());
$smarty->assign('PAG_BLOG_NOVO', Rotas::pag_Add_BlogNovo());
$smarty->assign('PAG_BLOG_EDITAR', Rotas::pag_Add_BlogEditar());
$smarty->assign('BLOG', $blog->GetItens());

$smarty->display('add_blog.tpl');

?>