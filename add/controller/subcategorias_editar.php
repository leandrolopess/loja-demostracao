<?php 
 
$smarty = new Template();

if(Login::LogadoADM()){
	$smarty->assign('USER', $_SESSION['ADM']['user_nome']);
	$smarty->assign('DATA', $_SESSION['ADM']['user_data']);
	$smarty->assign('HORA', $_SESSION['ADM']['user_hora']);
	$smarty->assign('SOBRENOME', $_SESSION['ADM']['user_sobrenome']);
	$smarty->assign('STATUS', $_SESSION['ADM']['user_status']);
}


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

  if(isset($_POST['cate_editar']) && $_SESSION['ADM']['user_status'] == 'admin'){
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