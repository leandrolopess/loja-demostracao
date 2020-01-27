<?php 
Class Favoritos extends Conexao{
    function __construct(){
        parent::__construct();
    }
    // Busca Produtos
    function GetProdutos(){
        //Query para buscar produtos de uma categoria especifica
     $query = "SELECT * FROM {$this->prefix}favoritos f INNER JOIN {$this->prefix}produtos p ON f.fav_produto = p.pro_nome";
     // Juntar querys
     $query .=  " ORDER BY pro_id DESC";

     // $query .= $this->PaginacaoLinks("pro_id", $this->prefix. "produtos");
 
     $this->ExecuteSQl($query);

     $this->GetLista();
    }

    // Função para fazer a contagem de favoritos
    function ContagemFavoritos($id){
        //Query para buscar produtos de uma categoria especifica
     $query = "SELECT * FROM  {$this->prefix}favoritos WHERE fav_cliente = {$id}";

     // Juntar querys
     //$query .=    " AND pro_id = :id";
       
     $params = array(':id'=>(int)$id);

     $this->ExecuteSQl($query, $params);
     
    return $this->obj->rowCount();

    }

    // Busca produtos pelo ID
    function GetProdutosID($id){
        //Query para buscar produtos de uma categoria especifica
     $query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c ON p.pro_categoria = c.cate_id";
     // Juntar querys
     $query .=    " AND pro_id = :id";
       
     $params = array(':id'=>(int)$id);

     $this->ExecuteSQl($query, $params);

     $this->GetLista();
    }


    // Busca produtos pelo ID
    function GetFavoritosID($id){
        //Query para buscar produtos de uma categoria especifica
    $query = "SELECT * FROM {$this->prefix}favoritos f INNER JOIN {$this->prefix}produtos p ON f.fav_produto_id = p.pro_id";
     //$query = "SELECT * FROM {$this->prefix}favoritos WHERE fav_cliente = {$id}";
     // Juntar querys
    $query .=    " WHERE fav_cliente = {$id} ORDER BY fav_id DESC";
    $query .= $this->PaginacaoLinks("fav_id", $this->prefix. "favoritos WHERE fav_cliente =".(int)$id);
     $this->ExecuteSQl($query);

     $this->GetLista();
    }

   private function GetLista(){
        $i = 1;
        while($lista = $this->ListarDados()):
        $this->itens[$i] = array(
            'fav_id' => $lista['fav_id'],
            'fav_cliente' => $lista['fav_cliente'],
            'fav_produto' => $lista['fav_produto'],
            'fav_categoria' => $lista['fav_categoria'],
            'fav_img' => Rotas::ImageLink($lista['fav_img'],  300, 300),
            'fav_produto_id' => $lista['fav_produto_id'],
            'fav_slug' => $lista['fav_slug'],
            'fav_valor' => Sistema::MoedaBR($lista['fav_valor']),
            'pro_nome' => $lista['pro_nome'],
            'pro_img' => Rotas::ImageLink($lista['pro_img'], 300, 300),
            'pro_nome' => $lista['pro_nome'],
            'pro_slug' => $lista['pro_slug'],
            'pro_valor' => Sistema::MoedaBR($lista['pro_valor']),
             );

        $i++;
    endwhile;

    }

    function Alterar($id){
          
        $query = " UPDATE {$this->prefix}produtos SET pro_nome=:pro_nome, pro_categoria=:pro_categoria," ;
        $query.= " pro_ativo=:pro_ativo, pro_modelo=:pro_modelo, pro_ref=:pro_ref,";
        $query.= " pro_valor=:pro_valor, pro_estoque=:pro_estoque, pro_peso=:pro_peso , ";
        $query.= " pro_altura=:pro_altura, pro_largura=:pro_largura,";
        $query.= " pro_comprimento=:pro_comprimento ,pro_img=:pro_img, pro_desc=:pro_desc, pro_slug=:pro_slug";
       $query.= " WHERE pro_id = :pro_id";
       
        
        $params = array(
        ':pro_nome'=> $this->getPro_nome(),   
        ':pro_categoria'=> $this->getPro_categoria(),   
        ':pro_ativo'=> $this->getPro_ativo(),   
        ':pro_modelo'=> $this->getPro_modelo(),   
        ':pro_ref'=> $this->getPro_ref(),   
        ':pro_valor'=> $this->getPro_valor(),   
        ':pro_estoque'=> $this->getPro_estoque(),   
        ':pro_peso'=> $this->getPro_peso(),   
        ':pro_altura'=> $this->getPro_altura() , 
        ':pro_largura'=> $this->getPro_largura(),
        ':pro_comprimento'=> $this->getPro_comprimento(),   
        ':pro_img'=> $this->getPro_img(),   
        ':pro_desc'=> $this->getPro_desc(),   
        ':pro_slug'=> $this->getPro_slug(),   
        ':pro_id'=> (int)$id,   
                     
        );
        
           
        
           // executo a SQL
           if($this->ExecuteSQL($query, $params)):
               
                   return TRUE;
               
               else:
                   
                   return FALSE; 
               
           endif;
        
        
           
           
        }


        function Apagar($id){
           $query = "DELETE FROM {$this->prefix}favoritos WHERE fav_id = :id";
           $params = array(
            ':id' => (int)$id
            );

           // executo a SQL
           if($this->ExecuteSQL($query, $params)):
               
                   return TRUE;
               
               else:
                   
                   return FALSE; 
               
           endif;
        }   

    // Metodos GET

    function getFav_cliente() {
        return $this->fav_cliente;
    }

    function getFav_produto() {
        return $this->fav_produto;
    }

    function getFav_categoria() {
        return $this->fav_categoria;
    }
    
    function getFav_img() {
        return $this->fav_img;
    }

    function getFav_produto_id() {
        return $this->fav_produto_id;
    }

    function getFav_slug() {
        return $this->fav_slug;
    }

    function getFav_valor() {
        return $this->fav_valor;
    }
    

    

    // Metodos SET

    function setFav_cliente($fav_cliente) {
        $this->fav_cliente = $fav_cliente;
    }

    function setFav_produto($fav_produto) {
        $this->fav_produto = $fav_produto;
    }

    function setFav_categoria($fav_categoria) {
        $this->fav_categoria = $fav_categoria;
    }

    function setFav_img($fav_img) {
        $this->fav_img = $fav_img;
    }

    function setFav_produto_id($fav_produto_id) {
        $this->fav_produto_id = $fav_produto_id;
    }

    function setFav_slug($fav_slug) {
        $this->fav_slug = $fav_slug;
    }

    function setFav_valor($fav_valor) {
        $this->fav_valor = $fav_valor;
    }


    

    function Preparar($fav_cliente, $fav_produto, $fav_categoria, $fav_img, $fav_produto_id, $fav_slug, $fav_valor){
        
            $this->setFav_cliente($fav_cliente);
            $this->setFav_produto($fav_produto);
            $this->setFav_categoria($fav_categoria);
            $this->setFav_img($fav_img);
            $this->setFav_produto_id($fav_produto_id);
            $this->setFav_slug($fav_slug);
            $this->setFav_valor($fav_valor);

            }






   function Inserir(){
       // Verifica se o produto já não foi adiconao a lista de produtos do cliente
     if($this->GetFavoritoProduto($this->getFav_produto_id(), $this->getFav_cliente()) > 0){
            echo '<script>alert("Esse produto já foi adicionado a sua lista de favoritos")</script>';
             Rotas::Redirecionar(0,Rotas::pag_ClienteFavoritos());
            exit();
        }
          
        $query = "INSERT INTO {$this->prefix}favoritos (fav_cliente, fav_produto, fav_categoria, fav_img, fav_produto_id, fav_slug, fav_valor)" ;
        $query.= " VALUES ";
        $query.= " ( :fav_cliente, :fav_produto, :fav_categoria, :fav_img, :fav_produto_id, :fav_slug, :fav_valor)";
        
        $params = array(
        ':fav_cliente'=> $this->getFav_cliente(),   
        ':fav_produto'=> $this->getFav_produto(),
        ':fav_categoria'=> $this->getFav_categoria(),
        ':fav_img'=> $this->getFav_img(), 
        ':fav_produto_id'=> $this->getFav_produto_id(),
        ':fav_slug'=> $this->getFav_slug(),
        ':fav_valor'=> $this->getFav_valor(),   
                     
        );


          if($this->ExecuteSQL($query, $params)):
               
                   return TRUE;
               
               else:
                   
                   return FALSE; 
               
           endif;
        
        
           
           
        }

        // Verifica se o produto já não existe no banco
    function GetFavoritoProduto($produto, $cliente){
          $query = "SELECT * FROM {$this->prefix}favoritos ";
          $query .= " WHERE fav_produto_id = :produto AND fav_cliente = :cliente";
          $params = array(':produto'=> $produto, ':cliente'=> $cliente);
          $this->ExecuteSQL($query, $params);
          return $this->TotalDados();
    }


  } //Fechamento da classe

?>