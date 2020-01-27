<?php 

$smarty = new Template();

$produtos = new Produtos();
// Mostra as os produtos que tem a mesmo ID da categoria, baseado no ID passado na URL
// if(isset(Rotas::$pag[1]) && !isset($_POST['buscar'])){
// $produtos->GetProdutosCateID(Rotas::$pag[1]);

// Faz a pesquisa de produtos 
// pelo nome passado pela barra de pesquisa da página de produtos
//}
if(isset($_GET['s'])){
	
 $nome = filter_var($_GET['s'], FILTER_SANITIZE_STRING);
 $categoria = Rotas::$pag[1];
 $produtos->GetProdutosCategoria($nome, $categoria);
 // echo "TESTE";
                
}
else{
$produtos->GetProdutosCateID(Rotas::$pag[1]);
}

$categorias = new Categorias();
$categorias->GetCategorias('masculino');


// $subcategorias = new Subcategorias();
// $subcategorias->GetSubcategorias();

$smarty->assign('GET_SITE', Rotas::get_SiteHOME());
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('PRO', $produtos->GetItens());
$smarty->assign('PRO_INFO', Rotas::pag_ProdutosInfo());
$smarty->assign('CATEGORIAS', $categorias->GetItens());
// $smarty->assign('SUBCATEGORIAS', $subcategorias->GetItens());
$smarty->assign('PAG_PRODUTOS', Rotas::pag_Produtos());
$smarty->assign('PRO_TOTAL', $produtos->TotalDados());
$smarty->assign('PAGINAS', $produtos->ShowPaginacaoInfinitaBusca());
$smarty->assign('SUBCATEGORIA_ID', Rotas::$pag[1]);
$smarty->assign('SUBCATEGORIA_SLUG', Rotas::$pag[2]);
$smarty->assign('PAG_BUSCA', Rotas::pag_Busca());

// Sempre no final
$smarty->display('produtos.tpl');
?>





