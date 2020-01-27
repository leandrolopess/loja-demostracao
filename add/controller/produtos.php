<?php 

$smarty = new Template();

$produtos = new Produtos();
if(isset(Rotas::$pag[1])){
	$produtos->GetProdutosCateID(Rotas::$pag[1]);
}else{
    $produtos->GetProdutos();	
}

$categorias = new Categorias();
$categorias->GetCategorias('masculino');

$categoriasfe = new Categorias();
$categoriasfe->GetCategorias('feminino');

$categoriasin = new Categorias();
$categoriasin->GetCategorias('infantil');

$categoriasbo = new Categorias();
$categoriasbo->GetCategorias('bolas');

$smarty->assign('LOGADO', Login::Logado());
$smarty->assign('PAG_MINHACONTA', Rotas::pag_MinhaConta());
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('PAG_PRODUTOS', Rotas::pag_Add_Produtos());
$smarty->assign('PAG_CLIENTES', Rotas::pag_Add_Clientes());
$smarty->assign('GET_SITE_HOME', Rotas::get_SiteHOME());
$smarty->assign('PAG_SUBCATEGORIAS', Rotas::pag_Add_Subcategorias());
$smarty->assign('PAG_PEDIDOS', Rotas::pag_Add_Pedidos());
$smarty->assign('PRO_INFO', Rotas::pag_ProdutosInfo());
$smarty->assign('PRO_TOTAL', $produtos->TotalDados());
$smarty->assign('PAGINAS', $produtos->ShowPaginacao());
$smarty->assign('PRO', $produtos->GetItens());
$smarty->assign('PAG_PRODUTO_NOVO', Rotas::pag_Add_ProdutosNovo());
$smarty->assign('GET_SITE_ADD', Rotas::get_SiteAdd());
$smarty->assign('PAG_PRODUTO_EDITAR', Rotas::pag_Add_ProdutosEditar());
$smarty->assign('PAG_PRODUTO_IMG', Rotas::pag_Add_ProdutosImg());
$smarty->assign('CATEGORIASFE', $categoriasfe->GetItens());
$smarty->assign('CATEGORIAS', $categorias->GetItens());
$smarty->assign('CATEGORIASIN', $categoriasin->GetItens());
$smarty->assign('CATEGORIASBO', $categoriasbo->GetItens());



if(Login::LogadoADM()){
	$smarty->assign('USER', $_SESSION['ADM']['user_nome']);
	$smarty->assign('DATA', $_SESSION['ADM']['user_data']);
	$smarty->assign('HORA', $_SESSION['ADM']['user_hora']);
}

//$smarty->display('./inc/top-painel.tpl');
//$smarty->display('./inc/header.tpl');
$smarty->display('add_produtos.tpl');
//$smarty->display('./inc/footer.tpl');
?>