<?php 

$smarty = new Template();
// Mostra as os produtos que tem a mesmo ID da categoria, baseado no ID passado na URL
$produtos = new Produtos();
// if(!isset($_POST['buscar'])){
// 	$produtos->GetProdutosNome('bola');

// }

if(isset($_GET['s'])){
$nome = filter_var($_GET['s'], FILTER_SANITIZE_STRING);
$produtos->GetProdutosNome($nome);
                
}



$categorias = new Categorias();
$categorias->GetCategorias('masculino');


// $subcategorias = new Subcategorias();
// $subcategorias->GetSubcategorias();

$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('PRO', $produtos->GetItens());
$smarty->assign('PRO_INFO', Rotas::pag_ProdutosInfo());
$smarty->assign('CATEGORIAS', $categorias->GetItens());
// $smarty->assign('SUBCATEGORIAS', $subcategorias->GetItens());
$smarty->assign('PAG_PRODUTOS', Rotas::pag_Produtos());
$smarty->assign('PRO_TOTAL', $produtos->TotalDados());
$smarty->assign('PAGINAS', $produtos->ShowPaginacaoBusca());
$smarty->assign('PAG_BUSCA', Rotas::pag_Busca());

// Sempre no final
$smarty->display('busca.tpl');
?>





