<?php 

$smarty = new Template();
$cateblog = new BlogCategorias();

$cateblog->GetBlogCate();

$smarty->assign('SUCESSO', '');
$smarty->assign('ERRO', '');
$smarty->assign('AVISO', '<center><div class="col-md-9"><ul class="woo-error" role="alert">
   <li> Nem uma categoria ainda foi cadastrada</div></li>
   </ul></center>');

if(isset($_POST['cate_nova'])){
   $cate_nome = $_POST['cateblog_nome'];
    if($cateblog->Inserir($cate_nome)){
      $smarty->assign('SUCESSO', '<center><div class="col-md-9"><ul class="woo-sucesso margin-top" role="alert">
   <li> Categoria adicionada</div></li>
   </ul></center>');
      Rotas::Redirecionar(0, Rotas::pag_Add_BlogCategorias());
    }
 }

 if(isset($_POST['cate_apagar'])){
   $cate_id = $_POST['cate_id'];
    if($cateblog->Apagar($cate_id)){
      $smarty->assign('SUCESSO', '<center><div class="col-md-9"><ul class="woo-sucesso margin-top" role="alert">
   <li> Categoria apagada</div></li>
   </ul></center>');
      Rotas::Redirecionar(0, Rotas::pag_Add_BlogCategorias());
    }
 }






$smarty->assign('GET_SITE', Rotas::get_SiteAdd());
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('BLOG', Rotas::pag_Add_Blog());
$smarty->assign('CATEGORIAS', $cateblog->GetItens());
$smarty->assign('TOTAL_CATEGORIAS', $cateblog->TotalDados());
$smarty->assign('EDITAR', Rotas::pag_Add_BlogCategoriasEditar());


$smarty->display('add_blog_categorias.tpl');

?>