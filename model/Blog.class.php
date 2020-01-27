<?php 

Class Blog extends Conexao{

	
function GetBlogTodos(){
    $query = "SELECT * FROM {$this->prefix}blog b INNER JOIN {$this->prefix}blog_categoria c ON (b.blog_categorias = c.cateblog_nome)";
    $query .=" INNER JOIN {$this->prefix}user u ON (b.blog_autor = u.user_usuario)";
    $query .=  " ORDER BY blog_id DESC";

     $this->ExecuteSQl($query);

     $this->GetLista();
    }

function GetBlog(){
    $query = "SELECT * FROM {$this->prefix}blog b INNER JOIN {$this->prefix}blog_categoria c ON (b.blog_categorias = c.cateblog_nome)";
    $query .=" INNER JOIN {$this->prefix}user u ON (b.blog_autor = u.user_usuario)";
     // Juntar querys
    $query .=  " WHERE blog_status = 'publicado'";
     $query .=  " ORDER BY blog_id DESC";

      $query .= $this->PaginacaoLinksProdutos("blog_id", $this->prefix. "blog WHERE blog_status = 'publicado'");

      $this->ExecuteSQl($query);

     $this->GetLista();
    }


    function GetBlogHOME(){
    $query = "SELECT * FROM {$this->prefix}blog b INNER JOIN {$this->prefix}blog_categoria c ON (b.blog_categorias = c.cateblog_nome)";
    $query .=" INNER JOIN {$this->prefix}user u ON (b.blog_autor = u.user_usuario)";
     // Juntar querys
    $query .=  " WHERE blog_status = 'publicado'";
     $query .=  " ORDER BY blog_id DESC LIMIT 3";

      // $query .= $this->PaginacaoLinksProdutos("blog_id", $this->prefix. "blog WHERE blog_status = 'publicado'");

      $this->ExecuteSQl($query);

     $this->GetLista();
    }

    function GetBlogCateNome($categoria){
    $query = "SELECT * FROM {$this->prefix}blog b INNER JOIN {$this->prefix}blog_categoria c ON (b.blog_categorias = c.cateblog_nome)";
    $query .=" INNER JOIN {$this->prefix}user u ON (b.blog_autor = u.user_usuario)";
     // Juntar querys
    $query .=  " WHERE blog_categorias = '$categoria'";
    // $query .=  " ORDER BY blog_id DESC";

      // $query .= $this->PaginacaoLinksProdutos("blog_id", $this->prefix. "blog WHERE blog_status = 'publicado'");

      $this->ExecuteSQl($query);

     $this->GetLista();
    }

    function GetBlogData($data){
    $query = "SELECT * FROM {$this->prefix}blog ";

     // Juntar querys
    $query .=  " WHERE blog_data = $data";
    

     // $query .= $this->PaginacaoLinks("pro_id", $this->prefix. "produtos");
      $this->ExecuteSQl($query);

      echo $query;

    
    }

    function GetBlogID($id){
        //Query para buscar produtos de uma categoria especifica
     $query = "SELECT * FROM {$this->prefix}blog b INNER JOIN {$this->prefix}blog_categoria c ON (b.blog_categorias = c.cateblog_nome)";
    $query .=" INNER JOIN {$this->prefix}user u ON (b.blog_autor = u.user_usuario)";
     
    
     // Juntar querys
     $query .=    " AND blog_id = :id";
       
     $params = array(':id'=>(int)$id);

     $this->ExecuteSQl($query, $params);

     $this->GetLista();
    }    


    function BlogView($id){
        $query = "UPDATE `{$this->prefix}blog` SET `blog_views` = blog_views + 1 WHERE `{$this->prefix}blog`.`blog_id` = :id";
        $params = array(
            ':id' => (int)$id
            );

        $this->ExecuteSQl($query, $params);

    }


    function GetBlogBusca($nome){
        
          // monto a SQL
        $query = "SELECT * FROM {$this->prefix}blog b INNER JOIN {$this->prefix}blog_categoria c ON (b.blog_categorias = c.cateblog_nome)";
        $query .=" INNER JOIN {$this->prefix}user u ON (b.blog_autor = u.user_usuario)";       
        $valor = str_replace(' ', '%', $nome);        
        $query .= " WHERE blog_status = 'publicado' AND blog_titulo LIKE '%".$valor."%' OR blog_categorias LIKE '%".$valor."%'";

        // %antes busca ex:cal = calça   depois busca ex alc = calca%
        
        $query .= $this->PaginacaoLinksProdutos("blog_id", $this->prefix. "blog WHERE blog_status = 'publicado' AND blog_titulo LIKE '%".$valor."%' OR blog_categorias LIKE '%".$valor."%'");

        $params = array(':nome'=>$nome);
       // executando a SQL                      
        $this->ExecuteSQL($query, $params);
        // trazendo a listagem 
        $this->GetLista();
    }



	private function GetLista(){
    	$i = 1;
    	while($lista = $this->ListarDados()):
    	$this->itens[$i] = array(
    		'blog_id' => $lista['blog_id'],
        'blog_data' => Sistema::Fdata($lista['blog_data']),
        'blog_data_d' => date('d', strtotime($lista['blog_data'])),
    		'blog_data_m' => ucfirst(utf8_encode(strftime("%b", strtotime($lista['blog_data'])))),
        'blog_data_a' => date('Y', strtotime($lista['blog_data'])),
    		'blog_autor' => $lista['blog_autor'],
        'blog_img' => $lista['blog_img'],
        'blog_categorias' => $lista['blog_categorias'],
    		'blog_tags' => $lista['blog_tags'],
        'blog_descricao' => Sistema::criaResumo($lista['blog_descricao'], 220), //260
        'blog_conteudo' => $lista['blog_descricao'],
        'blog_views' => $lista['blog_views'],
        'blog_status' => ucfirst($lista['blog_status']),
        'blog_titulo' => $lista['blog_titulo'],
        'blog_url' => $lista['blog_url'],
        'cateblog_id' => $lista['cateblog_id'],
        'cateblog_nome' => $lista['cateblog_nome'],
        'cateblog_url' => $lista['cateblog_url'],
        'user_nome' => $lista['user_nome'],
        'user_email' => $lista['user_email'],
        'user_sobrenome' => $lista['user_sobrenome'],
        'user_usuario' => $lista['user_usuario'],
        'blog_img_arquivo'   => Rotas::get_SiteRAIZ() .'/'. Rotas::get_ImgPasta('blog/').$lista['blog_img'], 
          'blog_img_atual'     => $lista['blog_img'] ,
            
             );

    	$i++;
    endwhile;

    }


    // Metodos GET

    function getBlog_titulo() {
        return $this->blog_titulo;
    }

    function getBlog_descricao() {
        return $this->blog_descricao;
    }

    function getBlog_img() {
        return $this->blog_img;
    }

    function getBlog_categorias() {
        return $this->blog_categorias;
    }

    function getBlog_status() {
        return $this->blog_status;
    }

    function getBlog_data() {
        return $this->blog_data;
    }

    function getBlog_autor() {
        return $this->blog_autor;
    }

    function getBlog_url() {
        return $this->blog_url;
    }


   


    // Metodos SET

    function setBlog_titulo($blog_titulo) {
        $this->blog_titulo = $blog_titulo;
    }

    function setBlog_descricao($blog_descricao) {
        $this->blog_descricao = $blog_descricao;
    }

    function setBlog_img($blog_img) {
        $this->blog_img = $blog_img;
    }

    function setBlog_categorias($blog_categorias) {
        $this->blog_categorias = $blog_categorias;
    }

    function setBlog_status($blog_status) {
        $this->blog_status = $blog_status;
    }

    function setBlog_data($blog_data) {
        $this->blog_data = $blog_data;
    }

    function setBlog_autor($blog_autor) {
        $this->blog_autor = $blog_autor;
    }

    function setBlog_url($blog_url) {
        $this->blog_url = $blog_url;
    }





    function Preparar($blog_titulo, $blog_descricao, $blog_img, $blog_categorias, $blog_status, $blog_data, $blog_autor, $blog_url){
        
                $this->setBlog_titulo($blog_titulo);
                $this->setBlog_descricao($blog_descricao);
                $this->setBlog_img($blog_img);
                $this->setBlog_categorias($blog_categorias);
                $this->setBlog_status($blog_status);
                $this->setBlog_data($blog_data);
                $this->setBlog_autor($blog_autor);
                $this->setBlog_url($blog_url);
                
                
                
            }




    function Inserir(){
          
        $query = "INSERT INTO {$this->prefix}blog (blog_titulo, blog_descricao, blog_img,";
        $query .= " blog_categorias, blog_status,";
         $query .= " blog_data, blog_autor, blog_url)";
        $query.= " VALUES ";
        $query.= " ( :blog_titulo, :blog_descricao, :blog_img,";
        $query .=" :blog_categorias, :blog_status, :blog_data, :blog_autor, :blog_url)"; 
        
        $params = array(
        ':blog_titulo'=> $this->getBlog_titulo(),
        ':blog_descricao'=> $this->getBlog_descricao(), 
        ':blog_img'=> $this->getBlog_img(),
        ':blog_categorias'=> $this->getBlog_categorias(),
        ':blog_status'=> $this->getBlog_status(), 
        ':blog_data'=> $this->getBlog_data(), 
        ':blog_autor'=> $this->getBlog_autor(),
        ':blog_url'=> $this->getBlog_url(),
           
                     
        );


          if($this->ExecuteSQL($query, $params)):
               
                   return TRUE;
               
               else:
                   
                   return FALSE; 
               
           endif;
        
        
           
           
        }

        function PrepararUptade($blog_titulo, $blog_descricao, $blog_img, $blog_categorias, $blog_status, $blog_url){
        
                $this->setBlog_titulo($blog_titulo);
                $this->setBlog_descricao($blog_descricao);
                $this->setBlog_img($blog_img);
                $this->setBlog_categorias($blog_categorias);
                $this->setBlog_status($blog_status);
                $this->setBlog_url($blog_url);
                
                
                
            }


        function Alterar($id){
          
        $query = " UPDATE {$this->prefix}blog SET blog_titulo=:blog_titulo, blog_descricao=:blog_descricao," ;
        $query.= " blog_img=:blog_img, blog_categorias=:blog_categorias, blog_status=:blog_status, blog_url=:blog_url";
       $query.= " WHERE blog_id = :blog_id";
       
        
        $params = array(
        ':blog_titulo'=> $this->getBlog_titulo(),
        ':blog_descricao'=> $this->getBlog_descricao(),
        ':blog_img'=> $this->getBlog_img(),
        ':blog_categorias'=> $this->getBlog_categorias(),
        ':blog_status'=> $this->getBlog_status(),
        ':blog_url'=> $this->getBlog_url(),
        ':blog_id'=> (int)$id,   
                     
        );
        
           
        
           // executo a SQL
           if($this->ExecuteSQL($query, $params)):
               
                   return TRUE;
               
               else:
                   
                   return FALSE; 
               
           endif;
        
        
           
           
        }



       function Apagar($id){
           $query = "DELETE FROM {$this->prefix}blog WHERE blog_id = :id";
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







}//Fechamento classe

?>