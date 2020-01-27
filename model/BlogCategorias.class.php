<?php 

Class BlogCategorias extends Conexao{

	
function GetBlogCate(){
    $query = "SELECT * FROM {$this->prefix}blog_categoria";
    
     $this->ExecuteSQl($query);

     $this->GetLista();
    }

   



	private function GetLista(){
    	$i = 1;
    	while($lista = $this->ListarDados()):
    	$this->itens[$i] = array(
    	'cateblog_id' => $lista['cateblog_id'],
        'cateblog_nome' => $lista['cateblog_nome'],
        'cateblog_url' => $lista['cateblog_url'],
        
            
             );

    	$i++;
    endwhile;

    }


    // Metodos GET

    function getCateblog_nome() {
        return $this->cateblog_nome;
    }

     function getCateblog_url() {
        return $this->cateblog_url;
    }

     


    // Metodos SET

    function setCateblog_nome($cateblog_nome) {
        $this->cateblog_nome = $cateblog_nome;
    }

    function setCateblog_url($cateblog_url) {
        $this->cateblog_url = Sistema::GetSlug($cateblog_url);
    }

    


   

    function Inserir($cateblog_nome){

        // trato os campos
        $this->setCateblog_nome($cateblog_nome);
        $this->setCateblog_url($cateblog_nome);
          
        $query = "INSERT INTO {$this->prefix}blog_categoria (cateblog_nome, cateblog_url)";
        $query.= " VALUES ";
        $query.= " ( :cateblog_nome, :cateblog_url)"; 
        
        $params = array(
        ':cateblog_nome'=> $this->getCateblog_nome(),   
        ':cateblog_url'=> $this->getCateblog_url(),     
                     
        );


          if($this->ExecuteSQL($query, $params)):
               
                   return TRUE;
               
               else:
                   
                   return FALSE; 
               
           endif;
        
        
           
           
        }


        function Editar($cateblog_id, $cateblog_nome){
        
        // trato os campos
        $this->setCateblog_nome($cateblog_nome);
        $this->setCateblog_url($cateblog_nome);
        
        // monto a SQL
        $query = " UPDATE {$this->prefix}blog_categoria ";
        $query.= " SET cateblog_nome = :cateblog_nome, cateblog_url = :cateblog_url";
        $query.= " WHERE cateblog_id = :cateblog_id";
        // passo so parametros
        $params = array(':cateblog_nome' => $this->getCateblog_nome(),
                        ':cateblog_url' => $this->getCateblog_url(),
                        ':cateblog_id'   => (int)$cateblog_id,
                        
            );
        // executo a minha SQL
            if($this->ExecuteSQL($query, $params)):
                return TRUE;
                
            else:
                return FALSE;
                
            endif;
        
        
    }



       function Apagar($categoria){
        
          // verifico se  tenho itens antes de apagar a categoria
          $blog = new Blog();
          $blog->GetBlogCateNome($categoria);
          
        if( $blog->TotalDados() > 0):

              echo '<center><div class="col-md-9"><ul class="woo-error margin-top" role="alert"><li> Esta categoria tem: ';
              echo $blog->TotalDados();
              echo ' post(s). <br> Para apagar, precisa primeiro apagar os posts dela </div></li>
                  </ul></center>';
     
              // se nao tiver produtos nela  eu apago 
         else:
            
                 // monto a SQL
        $query = " DELETE FROM {$this->prefix}blog_categoria";
        $query.= " WHERE cateblog_nome = :categoria";
        
        // passo os parametros
        $params = array(':categoria' => $categoria);
        // executo a SQL
    
         if($this->ExecuteSQL($query, $params)):
            // Mostra o echo quando dah certo
                return TRUE;
                
            else:
                return FALSE;
                
            endif;
        
        endif;
     
        
    } 







}//Fechamento classe

?>