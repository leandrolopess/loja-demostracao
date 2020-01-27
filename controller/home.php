<?php 

$smarty = new Template();

// Banners
$Banner = new Banner();
// Banner Destaque
$BannerDestaque = new Banner();

$produtos = New Produtos();
$promo = new Produtos();

$produtos->GetProdutos();
$promo->GetProdutosPromo();

$blog = new Blog();

$blog->GetBlogHOME();

$Banner->GetImages();
$BannerDestaque->GetBannerDestaque();

$smarty->assign('GET_SITE', Rotas::get_SiteHOME());
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('IMAGES', $Banner->GetItens());
$smarty->assign('DESTAQUE', $BannerDestaque->GetItens());
$smarty->assign('PRO', $produtos->GetItens());
$smarty->assign('PROMO', $promo->GetItens());
$smarty->assign('PRO_INFO', Rotas::pag_ProdutosInfo());
$smarty->assign('BLOG', $blog->GetItens());
$smarty->assign('BLOG_CONTEUDO', Rotas::pag_BlogConteudo());
$smarty->assign('PAG_BLOG', Rotas::pag_Blog());

// Sempre no final
// $smarty->display('inc/top.tpl');
$smarty->display('home.tpl');
?>