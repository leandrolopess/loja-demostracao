<?php 
Class Subcategorias extends Conexao{
    private $cate_id, $cate_nome, $cate_slug;
     // Conexão com o banco
	function __construct(){
		parent::__construct();
	}

// Busca Produtos
    function GetSubcategorias(){
    	//Query para buscar produtos de uma categoria especifica
     $query = "SELECT * FROM subcategoria WHERE sub_cat_id = 3";

     $this->ExecuteSQl($query);
  
     $this->GetLista();
    }

    private function GetLista(){
    	$i = 1;
    	while($lista = $this->ListarDados()):
    	$this->itens[$i] = array(
    	    'sub_id' => $lista['sub_id'],
            //'cate_id' => $lista['cate_id'],
            'sub_cat_id' => $lista['sub_cat_id'],
    		'sub_nome' => $lista['sub_nome'],
    		'sub_slug' => $lista['sub_slug'],
    		'sub_link' => Rotas::pag_Produtos(). '/' .$lista['sub_cat_id'] . '/' . $lista['sub_slug'] ,

             );

    	$i++;
    endwhile;

    }





}

?>