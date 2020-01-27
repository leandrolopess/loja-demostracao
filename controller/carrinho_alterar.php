<?php

if(!isset($_POST['pro_id']) or $_POST['pro_id'] < 1){
	echo 'Erro na operação! Tente novamente';
	Rotas::Redirecionar(1, Rotas::pag_Carrinho());
	exit;
} 

$id = (int)$_POST['pro_id'];

$carrinho = new Carrinho();

try {
$carrinho->CarrinhoADD($id);
} catch (Exception $e) {
	echo 'Erro na operação! Tente novamente';
}

Rotas::Redirecionar(1, Rotas::pag_Carrinho());

?>