<?php
//Não mostrar erros
//ini_set('display_errors', 0 );
//error_reporting(0);

date_default_timezone_set('America/Sao_Paulo');



// Inicia a Sessão
if(!isset($_SESSION)){
    session_start();
}

//Inclui o autoload do Composer
require '../lib/autoload.php';

if(!Login::LogadoADM()){
	Rotas::Redirecionar(0, 'login.php');
	exit();
}


//Chama as funções ailer();
$smarty = new Template();


$produtos = new Produtos();


$carrinho = new Carrinho();
$login = new Login();



//Valores para o template
$smarty->assign('TITULO_SITE', 'Painel Administrativo Vanuza Esportes');
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('SITE_NOME', Config::SITE_NOME);
$smarty->assign('GET_SITE_HOME', Rotas::get_SiteHOME());
$smarty->assign('GET_SITE_ADD', Rotas::get_SiteAdd());
$smarty->assign('PAG_CLIENTES', Rotas::pag_Add_Clientes());
$smarty->assign('PAG_PEDIDOS', Rotas::pag_Add_Pedidos());
$smarty->assign('PAG_SUBCATEGORIAS', Rotas::pag_Add_Subcategorias());
$smarty->assign('PAG_CONTATO', Rotas::pag_Contato());
$smarty->assign('PAG_PRODUTOS', Rotas::pag_Add_Produtos());
$smarty->assign('PAG_PRODUTO_NOVO', Rotas::pag_Add_ProdutosNovo());
$smarty->assign('DATA', Sistema::DataAtualBR());
$smarty->assign('PAG_LOGOFF', Rotas::get_SiteHOME() .'/logoff');
$smarty->assign('PAG_SENHA', Rotas::get_SiteHOME() .'/adm_senha');
$smarty->assign('PAG_BANNERS', Rotas::pag_Banners());
$smarty->assign('PAG_LOJAS', Rotas::pag_Add_Lojas());
$smarty->assign('PAG_BLOG', Rotas::pag_Add_Blog());
$smarty->assign('PAG_BLOG_NOVO', Rotas::pag_Add_BlogNovo());
$smarty->assign('PAG_BLOG_CATEGORIAS', Rotas::pag_Add_BlogCategorias());


$pagina = $_GET['pag'];

if(empty($pagina)){ $pagina = "Painel de Controle";} 
$smarty->assign('PAGINA', ucfirst($pagina));



// Sempre no final
//$smarty->display('./inc/top-painel.tpl');
//$smarty->display('./inc/header.tpl');
$smarty->display('index.tpl');
//$smarty->display('./inc/footer.tpl');
