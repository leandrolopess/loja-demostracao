<?php 
Class ProdutosRelacionados extends Conexao{
    function __construct(){
        parent::__construct();
    }


    // Busca por produtos relacionados
    function GetProdutosRelacionados($slug, $subcategoria){
        //Query para buscar produtos de uma categoria especifica
     $query = "SELECT * FROM {$this->prefix}produtos WHERE ";
     // Juntar querys
      $query .=    " pro_slug != '$slug' AND pro_categoria LIKE $subcategoria";

     // $params = array(':slug'=> $slug, ':subcategoria'=> $subcategoria);

     $this->ExecuteSQl($query);

     $this->GetLista();
    }



 // '%$categories%' Pegar somente esse valor;



   private function GetLista(){
        $i = 1;
        while($lista = $this->ListarDados()):
        $this->itens[$i] = array(
            'pro_id' => $lista['pro_id'],
            'pro_nome' => $lista['pro_nome'],
            'pro_categoria' => $lista['pro_categoria'],
            'pro_desc' => $lista['pro_desc'],
            'pro_peso' => $lista['pro_peso'],
            'pro_valor_us' => $lista['pro_valor'],
            'pro_valor' => Sistema::MoedaBR($lista['pro_valor']),
            'pro_altura' => $lista['pro_altura'],
            'pro_estoque' => $lista['pro_estoque'],
            'pro_largura' => $lista['pro_largura'],
            'pro_comprimento' => $lista['pro_comprimento'],
            'pro_img_p' => Rotas::ImageLink($lista['pro_img'], 150, 150),
            'pro_img' => Rotas::ImageLink($lista['pro_img'], 300, 300),
            'pro_img_g' => Rotas::ImageLink($lista['pro_img'], 513, 513),
            'pro_img_gg' => Rotas::ImageLink($lista['pro_img'], 800, 800),
            'pro_slug' => $lista['pro_slug'],
            'pro_ref' => $lista['pro_ref'],
            'pro_modelo'   => $lista['pro_modelo'] ,  
            'pro_estoque'   => $lista['pro_estoque'] ,  
            'pro_ativo'   => $lista['pro_ativo'] , 
            'pro_img_arquivo'   => Rotas::get_SiteRAIZ() .'/'. Rotas::get_ImagePasta().$lista['pro_img'], 
            'pro_img_atual'     => $lista['pro_img'] , 
            'pro_views' => $lista['pro_views'],
             );

        $i++;
    endwhile;

    }

    
     
}

?>