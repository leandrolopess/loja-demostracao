<?php 
 
$smarty = new Template();
$categorias = new Categorias();

if(isset($_POST['cate_id']) && isset($_POST['cate_nome'])){
  $sub_id = $_POST['cate_id'];
  $sub_nome = $_POST['cate_nome'];
  $sub_categoria = $_POST['cate_sub'];
}

$smarty->assign('SUCESSO', '');
$smarty->assign('ERRO', '');
$smarty->assign('SUB_NOME', $sub_nome);
$smarty->assign('SUB_ID', $sub_id);
$smarty->assign('SUB_CATEGORIA', $sub_categoria);

  if(isset($_POST['cate_editar'])){
     $subcategoria_id = $_POST['cate_id'];
     $subcategoria_nome = $_POST['cate_nome'];
     $subcategoria_categoria = $_POST['cate_sub'];
     if($categorias->Editar($subcategoria_id, $subcategoria_nome, $subcategoria_categoria)){
       $smarty->assign('SUCESSO', '<center><div class="col-md-9"><ul class="woo-sucesso margin-top" role="alert">
     <li> Subcategoria atualizada</div></li>
    </ul></center>');
       Rotas::Redirecionar(1, Rotas::pag_Add_Subcategorias());
    }else{
      echo'<script>alert("Ocorreu um erro, tente novamente")</script>';
     exit();
    }
  }





$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('GET_SITE_ADD', Rotas::get_SiteAdd());
$smarty->assign('PAG_SUBCATEGORIAS', Rotas::pag_Add_Subcategorias());



//$smarty->display('./inc/top-painel.tpl');
//$smarty->display('./inc/header.tpl');
$smarty->display('add_subcategorias_editar.tpl');
//$smarty->display('./inc/footer.tpl');
?>