<?php 
Class BlogRelacionados extends Conexao{
    function __construct(){
        parent::__construct();
    }


    function GetBlogRelacionados($titulo, $categoria){
     $query = "SELECT * FROM {$this->prefix}blog b INNER JOIN {$this->prefix}blog_categoria c ON (b.blog_categorias = c.cateblog_nome)";
      $query .=" INNER JOIN {$this->prefix}user u ON (b.blog_autor = u.user_usuario)";
     // Juntar querys
      $query .=    "  WHERE blog_titulo != '$titulo' AND blog_status = 'publicado' AND  blog_categorias LIKE '%$categoria%' LIMIT 2";

     // $params = array(':slug'=> $slug, ':subcategoria'=> $subcategoria);

     $this->ExecuteSQl($query);

     $this->GetLista();
    }



 // '%$categories%' Pegar somente esse valor;



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
        'blog_descricao' => Sistema::criaResumo($lista['blog_descricao'], 230), //260
        'blog_conteudo' => $lista['blog_descricao'],
        'blog_views' => $lista['blog_views'],
        'blog_status' => ucfirst($lista['blog_status']),
        'blog_titulo' => $lista['blog_titulo'],
        'blog_url' => $lista['blog_url'],
        'blog_img_autor' => $lista['blog_img_autor'],
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
    
     
}

?>