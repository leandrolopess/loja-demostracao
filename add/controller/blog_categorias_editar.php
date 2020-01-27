<?php 
 
$smarty = new Template();
$cateblog = new BlogCategorias();

if(isset($_POST['cate_id']) && isset($_POST['cate_nome'])){
  $cate_id = $_POST['cate_id'];
  $cate_nome = $_POST['cate_nome'];
  
}

$smarty->assign('SUCESSO', '');
$smarty->assign('ERRO', '');
$smarty->assign('CATE_NOME', $cate_nome);
$smarty->assign('CATE_ID', $cate_id);


   if(isset($_POST['cate_editar'])){
      $categoria_id = $_POST['cate_id'];
      $categoria_nome = $_POST['cate_nome'];
      if($cateblog->Editar($categoria_id, $categoria_nome)){
     $smarty->assign('SUCESSO', '<center><div class="col-md-9"><ul class="woo-sucesso margin-top" role="alert">
     <li> Categoria atualizada</div></li>
     </ul></center>');
        Rotas::Redirecionar(1, Rotas::pag_Add_BlogCategorias());
     }else{
       echo'<script>alert("Ocorreu um erro, tente novamente")</script>';
      exit();
     }
   }





$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('GET_SITE_ADD', Rotas::get_SiteAdd());
$smarty->assign('PAG_CATEGORIAS', Rotas::pag_Add_BlogCategorias());



;
$smarty->display('add_blog_categorias_editar.tpl');

?>