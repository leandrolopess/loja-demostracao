<?php 
Class Categorias extends Conexao{
    private $cate_id, $cate_nome, $cate_slug;
     // Conexão com o banco
	function __construct(){
		parent::__construct();
	}

// Busca Produtos
    function GetCategorias($subcategoria){
    	//Query para buscar produtos de uma categoria especifica
     $query = "SELECT * FROM {$this->prefix}categorias WHERE cate_sub = '{$subcategoria}'";

     $params = array(':subcategoria'=> $subcategoria);

     $this->ExecuteSQl($query, $params);
   

     $this->GetLista();
    }

    private function GetLista(){
    	$i = 1;
    	while($lista = $this->ListarDados()):
         
         $cate_nome =   $lista['cate_nome'];
        $this->cate_nome =  $cate_nome;

    	$this->itens[$i] = array(
    	    'cate_id' => $lista['cate_id'],
    		'cate_nome' => $lista['cate_nome'],
            'cate_sub' => $lista['cate_sub'],
    		'cate_slug' => $lista['cate_slug'],
    		'cate_link' => Rotas::pag_Produtos(). '/' .$lista['cate_id'] . '/' . $lista['cate_slug'].  '?p=1',
            'cate_link_adm'  => Rotas::pag_Add_ProdutosFiltro(). '/' .$lista['cate_id'] . '/' . $lista['cate_slug']  , 

             );

    	$i++;
    endwhile;

    }

    function CateNome(){
          return $this->cate_nome;
    }

    function Inserir($cate_nome, $cate_slug, $cate_sub){
        
        // trato os campos
        $this->setCate_nome($cate_nome);
        $this->setCate_slug($cate_slug);
        $this->setCate_sub($cate_sub);
        
        // monto a SQL
        $query = " INSERT INTO {$this->prefix}categorias (cate_nome, cate_slug, cate_sub )";
        $query.= " VALUES (:cate_nome, :cate_slug, :cate_sub )";
        // passo so parametros
        $params = array(':cate_nome' => $this->getCate_nome(),
                        ':cate_slug' => $this->getCate_slug(),
                        ':cate_sub' => $this->getCate_sub(),
                      
            );
        // executo a minha SQL
            if($this->ExecuteSQL($query, $params)):
                return TRUE;
                
            else:
                return FALSE;
                
            endif;
        
        
    }

    function Editar($cate_id, $cate_nome, $cate_sub){
        
        // trato os campos
        $this->setCate_nome($cate_nome);
        $this->setCate_slug($cate_nome);
        $this->setCate_sub($cate_sub);
        
        // monto a SQL
        $query = " UPDATE {$this->prefix}categorias ";
        $query.= " SET cate_nome = :cate_nome, cate_slug = :cate_slug, cate_sub = :cate_sub ";
        $query.= " WHERE cate_id = :cate_id ";
        // passo so parametros
        $params = array(':cate_nome' => $this->getCate_nome(),
                        ':cate_slug' => $this->getCate_slug(),
                        ':cate_id'   => (int)$cate_id,
                        ':cate_sub' => $this->getCate_sub(),
                        
            );
        // executo a minha SQL
            if($this->ExecuteSQL($query, $params)):
                return TRUE;
                
            else:
                return FALSE;
                
            endif;
        
        
    }


     function Apagar($cate_id){
        
          // verifico se  tenho itens antes de apagar a categoria
          $pro = new Produtos();
          $pro->GetProdutosCateID($cate_id);
          
        if( $pro->TotalDados() > 0):

              echo '<center><div class="col-md-9"><ul class="woo-error margin-top" role="alert"><li> Esta categoria tem: ';
              echo $pro->TotalDados();
              echo ' produto(s). <br> Para apagar, precisa primeiro apagar os produtos dela </div></li>
                  </ul></center>';
     
              // se nao tiver produtos nela  eu apago 
         else:
            
                 // monto a SQL
        $query = " DELETE FROM {$this->prefix}categorias";
        $query.= " WHERE cate_id = :id";
        
        // passo os parametros
        $params = array(':id' => (int)$cate_id);
        // executo a SQL
    
         if($this->ExecuteSQL($query, $params)):
            // Mostra o echo quando dah certo
                return TRUE;
                
            else:
                return FALSE;
                
            endif;
        
        endif;
     
        
    }

    //MÉTODOS GET E SET CATEGORIAS


    function getCate_nome() {
        return $this->cate_nome;
    }

    function getCate_slug() {
        return $this->cate_slug;
    }

    function getCate_sub() {
        return $this->cate_sub;
    }




    function setCate_nome($cate_nome) {
       
        $this->cate_nome = filter_var($cate_nome, FILTER_SANITIZE_STRING);
    }

    function setCate_slug($cate_slug) {
       
        
        $this->cate_slug = Sistema::GetSlug($cate_slug);
    }

    function setCate_sub($cate_sub) {
       
        $this->cate_sub = filter_var($cate_sub, FILTER_SANITIZE_STRING);
    }
    






} //Fechamento da classe

?>