<?php

$smarty = new Template();

// $id = Rotas::$pag[1];
if(isset($_POST['produto_id'])){
$id = $_POST['produto_id'];
}else{
$id = '';
}

if(isset($_POST['produto_subcategoria'])){
$subcategoria = $_POST['produto_subcategoria'];
}else{
$subcategoria = '';
}



$produtos = new Produtos();
$produtos->GetProdutosID(Rotas::$pag[1]);
$produtos->ProdutoView($id);


// Chama as funções da classe
$image = new ProdutosImages();
// Passa o ID do produto no WHERE
$image->GetImagesPRO(Rotas::$pag[1]);
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('GET_HOME', Rotas::get_SiteHOME());
$smarty->assign('PRO', $produtos->GetItens());
// Acessa os itens da tabela
$smarty->assign('IMAGES', $image->GetItens());
// Envia para a página carrinho_alterar
$smarty->assign('PAG_COMPRAR', Rotas::pag_CarrinhoAlterar());
// Se o cliente escolher a quantidade envia a quantidade escolhida, 
if(isset($_POST['qua'])){
   $qua = $_POST['qua'];
}
// se não envia 1
else{
	$qua = 1;
}

$smarty->assign('QUA', $qua);

$smarty->assign('CLASSE_FAVORITO', '');
$smarty->assign('SUCESSO', '');
$favoritos = new Favoritos();

// Verifica se o produto já não foi adiconao a lista de produtos do cliente
  if(Login::Logado()){
  if($favoritos->GetFavoritoProduto($id, $_SESSION['CLI']['cli_id']) > 0){
  $smarty->assign('CLASSE_FAVORITO', 'azul');
  }
}

if(isset($_POST['add_favoritos'])){
$fav_cliente = $_SESSION['CLI']['cli_id'];
$fav_produto = $_POST['pro_nome'];
$fav_categoria = $_POST['pro_categoria'];
$fav_img = $_POST['pro_img'];
$fav_produto_id = $_POST['pro_id'];
$fav_slug = $_POST['pro_slug'];
$fav_valor = Sistema::moedaPhp($_POST['pro_valor']);



$favoritos->Preparar($fav_cliente, $fav_produto, $fav_categoria, $fav_img, $fav_produto_id, $fav_slug, $fav_valor);

// Faz a gravação no banco
if(Login::Logado()){
if($favoritos->Inserir()){
  $smarty->assign('SUCESSO', '<center><div class="col-md-9"><ul class="woo-sucesso margin-top" role="alert">
   <li> Produto adicionado aos favoritos!!</div></li>
   </ul></center>');
  $smarty->assign('CLASSE_FAVORITO', 'azul');

   
}}else{
  Login::AcessoNegado();
}


}

$slug = Rotas::$pag[2];
$produtosRelacionados = new ProdutosRelacionados();
$produtosRelacionados->GetProdutosRelacionados($slug, $subcategoria);
$smarty->assign('RELACIONADOS', $produtosRelacionados->GetItens());


// Sempre no final
$smarty->display('produtos_info.tpl');


?>