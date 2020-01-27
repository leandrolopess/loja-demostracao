<?php 

Class Rotas{

public static $pag;
private static $pasta_controller = 'controller';
private static $pasta_view = 'view';
private static $pasta_add = 'add';

// Caminho principal do add
 static function get_SiteAdd(){
 	return self::get_SiteHOME() .'/' .self::$pasta_add;
 }

//Caminho para a página de produtos add
 static function pag_Add_Produtos(){
 	return self::get_SiteAdd(). '/produtos?p=1';
 }

 //Caminho para a página de produtos add
 static function pag_Add_ProdutosFiltro(){
 	return self::get_SiteAdd(). '/produtos';
 }
  
 //Caminho para a página de adicionar novo produto add
 static function pag_Add_ProdutosNovo(){
 	return self::get_SiteAdd(). '/produtos_novo';
 }

 //Caminho para a página de adicionar editar produto add
 static function pag_Add_ProdutosEditar(){
 	return self::get_SiteAdd(). '/produtos_editar';
 }

 //Caminho para a página para apagar produto add
 static function pag_Add_ProdutosDeletar(){
 	return self::get_SiteAdd(). '/produtos_deletar';
 }

 //Caminho para a página fazer upload da imagem do produto add
 static function pag_Add_ProdutosImg(){
 	return self::get_SiteAdd(). '/produtos_img';
 }

//Caminho para a página de clientes add
 static function pag_Add_Clientes(){
 	return self::get_SiteAdd(). '/clientes?p=1';
 }

 //Caminho para a página para editar clientes add
 static function pag_Add_ClientesEditar(){
 	return self::get_SiteAdd(). '/clientes_editar';
 }

//Caminho para a página de pedidos add
 static function pag_Add_Pedidos(){
 	return self::get_SiteAdd(). '/pedidos';
 }

 //Caminho para a página de pedidos add
 static function pag_Add_PedidosCliente(){
 	return self::get_SiteAdd(). '/pedidos_clientes';
 }

//Caminho para a página de itens add
 static function pag_Add_Itens(){
 	return self::get_SiteAdd(). '/itens';
 }

//Caminho para a página de subcategorias add
 static function pag_Add_Subcategorias(){
 	return self::get_SiteAdd(). '/subcategorias';
}

//Caminho para a página de editar subcategorias add
 static function pag_Add_SubcategoriasEditar(){
 	return self::get_SiteAdd(). '/subcategorias_editar';
 }

//Caminho para a página de logoff
 static function pag_LogoffADM(){
 	return self::get_SiteAdd(). '/logoff';
 }

 static function pag_SenhaADM(){
 	return self::get_SiteAdd(). '/senha';
 }

 static function pag_Banners(){
 	return self::get_SiteAdd(). '/banners';
 }

 static function pag_Adicionar_Banner(){
 	return self::get_SiteAdd(). '/adicionar_banner';
 }

 static function pag_Editar_Banner(){
 	return self::get_SiteAdd(). '/editar_banner';
 }

 static function pag_Add_Lojas(){
 	return self::get_SiteAdd(). '/lojas';
 }

  static function pag_Add_LojasNova(){
 	return self::get_SiteAdd(). '/lojas_nova';
 }

 static function pag_Add_LojasEditar(){
 	return self::get_SiteAdd(). '/lojas_editar';
 }

 static function pag_Add_Blog(){
 	return self::get_SiteAdd(). '/blog';
 }

 static function pag_Add_BlogNovo(){
 	return self::get_SiteAdd(). '/blog_novo';
 }

 static function pag_Add_BlogEditar(){
 	return self::get_SiteAdd(). '/blog_editar';
 }

  static function pag_Add_BlogCategorias(){
 	return self::get_SiteAdd(). '/blog_categorias';
 }

 static function pag_Add_BlogCategoriasEditar(){
 	return self::get_SiteAdd(). '/blog_categorias_editar';
 }




                   // SITE


//Função para pegar o caminho completo de onde está o site
 static function get_SiteHOME(){
 	return Config::SITE_URL . '/' .Config::SITE_PASTA;
 }
//Função para pegar a URL completa onde está o site
 static function get_SiteRAIZ(){
 	return $_SERVER['DOCUMENT_ROOT'] . '/' .Config::SITE_PASTA;
 }
//Caminho para a pasta View
 static function get_SiteTEMA(){
 	return self::get_SiteHOME(). '/' .self::$pasta_view;
 }
 //Caminho para a página de busca
 static function pag_Busca(){
 	return self::get_SiteHOME(). '/busca';
 }
 //Caminho para a página que faz logoff
 static function pag_Logoff(){
 	return self::get_SiteHOME(). '/logoff';
 }
//Caminho para a página do Carrinho
 static function pag_Carrinho(){
 	return self::get_SiteHOME(). '/carrinho';
 }
 //Caminho para a página do Carrinho Alterar
 static function pag_CarrinhoAlterar(){
 	return self::get_SiteHOME(). '/carrinho_alterar';
 }
 //Caminho para a página de Produtos
 static function pag_Produtos(){
 	return self::get_SiteHOME(). '/produtos';
 }
 //Caminho para a página com informações do produto
 static function pag_ProdutosInfo(){
 	return self::get_SiteHOME(). '/produto';
 }
//Caminho para a página de Contato
 static function pag_Contato(){
 	return self::get_SiteHOME(). '/contato';
 }
//Caminho para a página da Minha Conta
 static function pag_MinhaConta(){
 	return self::get_SiteHOME(). '/login';
 }
 //Caminho para a página da Minha Conta
 static function pag_ClienteConta(){
 	return self::get_SiteHOME(). '/painel';
 }
 //Caminho para a página dos dados do cliente
 static function pag_ClienteDados(){
 	return self::get_SiteHOME(). '/dados';
 }
 //Caminho para a página de favoritos do cliente
 static function pag_ClienteFavoritos(){
 	return self::get_SiteHOME(). '/favoritos?p=1';
 }
  //Caminho para a página do perfil do cliente 
 //para troca de foto e nome de usuário
 static function pag_ClientePerfil(){
 	return self::get_SiteHOME(). '/perfil';
 }

 static function pag_ClienteSenha(){
 	return self::get_SiteHOME(). '/senha';
 }
 //Página de pedidos do cliente
 static function pag_ClientePedidos(){
 	return self::get_SiteHOME(). '/pedidos?p=1';
 }
 //Página de cadastro de novos clientes
 static function pag_ClienteCadastro(){
 	return self::get_SiteHOME(). '/cadastro';
 }
 //Página para recuperar a senha
 static function pag_ClienteRecovery(){
 	return self::get_SiteHOME(). '/recovery';
 }
  //Página de itens do cliente
 static function pag_ClienteItens(){
 	return self::get_SiteHOME(). '/itens';
 }
//Caminho para a página de confirmar pedido
 static function pag_PedidoConfirmar(){
 	return self::get_SiteHOME(). '/confirmar';
 }
//Caminho para a página de finalizar pedido
 static function pag_PedidoFinalizar(){
 	return self::get_SiteHOME(). '/finalizar';
 }

static function pag_PedidoRetorno(){
    return self::get_SiteHOME() .'/pedido_retorno' ;
}
   
 static function pag_PedidoRetornoERRO(){
    return self::get_SiteHOME() .'/pedido_retorno_erro' ;
}

static function pag_Blog(){
    return self::get_SiteHOME() .'/blog' ;
}

static function pag_BlogConteudo(){
    return self::get_SiteHOME() .'/conteudo' ;
}




            //GERAL

 static function get_ImagePasta(){
 	return 'media/img/';
 }

 static function get_ImagePastaBanner(){
 	return 'media/banners/';
 }

 static function get_ImgPasta($valor){
 	return 'media/'.$valor;
 }

 static function get_ImageURL(){
 	return self::get_SiteHOME() .'/' .self::get_ImagePasta();
 }

 static function ImageLink($img, $largura, $altura){
 	$imagem = self::get_ImageURL() ."thumb.php?src={$img}&w={$largura}&h={$altura}&zc=1";
 	return $imagem;
 }

static function get_Pasta_Controller(){
	return self::$pasta_controller;
}
//Método para redirecionar
static function Redirecionar($tempo, $pagina){
	$url = '<meta http-equiv="refresh" content="'.$tempo.'; url='.$pagina.'">';
	echo $url;
}



//Função para criar URL amigavel	
	static function get_Pagina(){

		if(isset($_GET['pag'])){

			$pagina = $_GET['pag'];

			self::$pag = explode('/', $pagina);

			$pagina = 'controller/' .self::$pag[0] . '.php';
			//$pagina = 'controller/' .$_GET['pag'] . '.php';
			if(file_exists($pagina)){
				include $pagina;
			}
			else{
				include 'erro.php';	
			}
		}else{
				include 'controller/home.php';
			}
	}
}



?>