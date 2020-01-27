<?php 

$smarty = new Template();
$categorias = new Categorias();
$categorias->GetCategorias('masculino');

$categoriasfe = new Categorias();
$categoriasfe->GetCategorias('feminino');

$categoriasin = new Categorias();
$categoriasin->GetCategorias('infantil');

$categoriasbo = new Categorias();
$categoriasbo->GetCategorias('bolas');
$smarty->assign('SUCESSO', '');
$smarty->assign('ERRO', '');


 if(isset($_POST['cate_nova'])){
   $cate_nome = $_POST['cate_nome'];
    $pro_categoria = $_POST['pro_categoria'];
    if($categorias->Inserir($cate_nome, 'categoria'. '-' .$pro_categoria. '-' .$cate_nome, $pro_categoria)){
      $smarty->assign('SUCESSO', '<center><div class="col-md-9"><ul class="woo-sucesso margin-top" role="alert">
   <li> Subcategoria adicionada</div></li>
   </ul></center>');
      Rotas::Redirecionar(0, Rotas::pag_Add_Subcategorias());
    }
 }

 if(isset($_POST['cate_apagar'])){
   $cate_id = $_POST['cate_id'];
    if($categorias->Apagar($cate_id)){
      $smarty->assign('SUCESSO', '<center><div class="col-md-9"><ul class="woo-sucesso margin-top" role="alert">
   <li> Subcategoria apagada</div></li>
   </ul></center>');
      Rotas::Redirecionar(0, Rotas::pag_Add_Subcategorias());
    }
 }



$smarty->assign('GET_SITE_ADD', Rotas::get_SiteAdd());
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('PAG_SUB_EDITAR', Rotas::pag_Add_SubcategoriasEditar());

$smarty->assign('CATEGORIASFE', $categoriasfe->GetItens());
$smarty->assign('CATEGORIAS', $categorias->GetItens());
$smarty->assign('CATEGORIASIN', $categoriasin->GetItens());
$smarty->assign('CATEGORIASBO', $categoriasbo->GetItens());

$smarty->assign('TOTAL_MASCULINO', $categorias->TotalDados());
$smarty->assign('TOTAL_FEMENINO', $categoriasfe->TotalDados());
$smarty->assign('TOTAL_INFANTIL', $categoriasin->TotalDados());
$smarty->assign('TOTAL_BOLAS', $categoriasbo->TotalDados());



//$smarty->display('./inc/top-painel.tpl');
//$smarty->display('./inc/header.tpl');
$smarty->display('add_subcategorias.tpl');
//$smarty->display('./inc/footer.tpl');
?>