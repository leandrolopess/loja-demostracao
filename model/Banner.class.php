<?php 

Class Banner extends Conexao{
	function GetImages(){
		$query = "SELECT * FROM {$this->prefix}banner WHERE banner_ordem > 1 ORDER BY banner_ordem ASC";
    // Pegar Váriavel de outra classe
	//$params = array(':pro'=>(int)$pro);

     $this->ExecuteSQl($query);

     $this->GetLista();
	}

    function GetBanners(){
        $query = "SELECT * FROM {$this->prefix}banner ORDER BY banner_ordem ASC";
    // Pegar Váriavel de outra classe
    //$params = array(':pro'=>(int)$pro);

     $this->ExecuteSQl($query);

     $this->GetLista();
    }


     // Busca produtos pelo ID
    function GetBannerID($id){
        //Query para buscar produtos de uma categoria especifica
     $query = "SELECT * FROM {$this->prefix}banner";
     // Juntar querys
     $query .=    " WHERE banner_id = :id";
       
     $params = array(':id'=>(int)$id);

     $this->ExecuteSQl($query, $params);

     $this->GetLista();
    }


    function GetBannerDestaque(){
    $query = "SELECT * FROM {$this->prefix}banner WHERE banner_ordem = 1";

    //$params = array(':pro'=>(int)$pro);

     $this->ExecuteSQl($query);

     $this->GetLista();
    }

	private function GetLista(){
    	$i = 1;
    	while($lista = $this->ListarDados()):
    	$this->itens[$i] = array(
    		'banner_id' => $lista['banner_id'],
    		'banner_img' => $lista['banner_img'],
    		'banner_descricao' => $lista['banner_descricao'],
            'banner_titulo' => $lista['banner_titulo'],
    		'banner_ordem' => $lista['banner_ordem'],
             'banner_img_arquivo'   => Rotas::get_SiteRAIZ() .'/'. Rotas::get_ImagePastaBanner().$lista['banner_img'], 
            'banner_img_atual'     => $lista['banner_img'] ,
             );

    	$i++;
    endwhile;

    }

    // Metodos GET

    function getBanner_titulo() {
        return $this->banner_titulo;
    }

    function getBanner_descricao() {
        return $this->banner_descricao;
    }

    function getBanner_ordem() {
        return $this->banner_ordem;
    }

    function getBanner_img() {
        return $this->banner_img;
    }


    // Metodos SET

    function setBanner_titulo($banner_titulo) {
        $this->banner_titulo = $banner_titulo;
    }

    function setBanner_descricao($banner_descricao) {
        $this->banner_descricao = $banner_descricao;
    }

    function setBanner_ordem($banner_ordem) {
        $this->banner_ordem = $banner_ordem;
    }

    function setBanner_img($banner_img) {
        $this->banner_img = $banner_img;
    }


    function Preparar($banner_titulo, $banner_descricao, $banner_ordem, $banner_img){
        
                $this->setBanner_titulo($banner_titulo);
                $this->setBanner_descricao($banner_descricao);
                $this->setBanner_ordem($banner_ordem);
                $this->setBanner_img($banner_img);
                
            }




    function Inserir(){
          
        $query = "INSERT INTO {$this->prefix}banner (banner_titulo, banner_descricao, banner_ordem, banner_img)";
        $query.= " VALUES ";
        $query.= " ( :banner_titulo, :banner_descricao, :banner_ordem, :banner_img)";
        
        
        $params = array(
        ':banner_titulo'=> $this->getBanner_titulo(),   
        ':banner_descricao'=> $this->getBanner_descricao(),   
        ':banner_ordem'=> $this->getBanner_ordem(),   
        ':banner_img'=> $this->getBanner_img(),   
                     
        );


          if($this->ExecuteSQL($query, $params)):
               
                   return TRUE;
               
               else:
                   
                   return FALSE; 
               
           endif;
        
        
           
           
        }


        function Alterar($id){
          
        $query = " UPDATE {$this->prefix}banner SET banner_titulo=:banner_titulo, banner_descricao=:banner_descricao," ;
        $query.= " banner_ordem=:banner_ordem, banner_img=:banner_img";
       $query.= " WHERE banner_id = :banner_id";
       
        
        $params = array(
        ':banner_titulo'=> $this->getBanner_titulo(),
        ':banner_descricao'=> $this->getBanner_descricao(),
        ':banner_ordem'=> $this->getBanner_ordem(),
        ':banner_img'=> $this->getBanner_img(),
        ':banner_id'=> (int)$id,   
                     
        );
        
           
        
           // executo a SQL
           if($this->ExecuteSQL($query, $params)):
               
                   return TRUE;
               
               else:
                   
                   return FALSE; 
               
           endif;
        
        
           
           
        }



       function Apagar($id){
           $query = "DELETE FROM {$this->prefix}banner WHERE banner_id = :id";
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