<?php 

$site = Config::GET_TEMA;
$sub = '';

// Home
if(isset($_GET['pag'])){
$pagina = $_GET['pag']; 
}else{
$pagina = "Home";	
$smarty->assign('PAGINA', $pagina);	
}

// CSS Blog
if($pagina == "blog" || $pagina == "Home" || substr($pagina, 0, 8) == "home" || substr($pagina, 0, 8) == "conteudo"){
$smarty->assign('PAGINA', $pagina);
$smarty->assign('BLOG_CSS', '<link rel="stylesheet" type="text/css" href="'.$site.'/assets/blog/css/blog.css">');
$smarty->assign('RESPONSIVE_CSS', '<link rel="stylesheet" type="text/css" href="'.$site.'/assets/blog/css/responsive.css">');
}else{
	$smarty->assign('BLOG_CSS', '');
	$smarty->assign('RESPONSIVE_CSS', '');
}

// Página do blog
if($pagina == "blog"){
$pagina = " Blog";	
$smarty->assign('PAGINA', $pagina);
}

// Página do blog
if(isset($_POST['titulo'])){
$titulo_blog = $_POST['titulo'];
}

if(substr($pagina, 0, 8) == "conteudo"){
$blog = "Blog - ";
$pagina = $blog. $titulo_blog;	
$smarty->assign('PAGINA', $pagina);
}

// Página do produto
if(isset($_POST['produto_nome'])){
$nome_produto = $_POST['produto_nome'];


if(substr($pagina, 0, 7) == "produto"){
$pagina = $nome_produto;	
$smarty->assign('PAGINA', $pagina);
}
}


// Categoria do produto
if(isset($_POST['sub_masculino'])){
$sub = 'Categoria '. $_POST['sub_masculino'] . ' Masculino ';
}

if(isset($_POST['sub_feminino'])){
$sub = 'Categoria '. $_POST['sub_feminino'] . ' Feminino ';
}

if(isset($_POST['sub_infantil'])){
$sub = 'Categoria '. $_POST['sub_infantil'] . ' Infantil ';
}

if(isset($_POST['sub_bolas'])){
$sub = 'Categoria '.  ' Bola '. 'de '. $_POST['sub_bolas'];
}

if(substr($pagina, 0, 8) == "produtos"){
$pagina = $_GET['pag']; 	
$smarty->assign('PAGINA', $sub);

}

// Página de contato
if($pagina == "contato"){
$pagina = " Contato";	
$smarty->assign('PAGINA', $pagina);
}




?>