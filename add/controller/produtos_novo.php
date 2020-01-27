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

$smarty->assign('GET_SITE_ADD', Rotas::get_SiteAdd());
$smarty->assign('PAG_PRODUTOS', Rotas::pag_Add_Produtos());
$smarty->assign('CATEGORIASFE', $categoriasfe->GetItens());
$smarty->assign('CATEGORIAS', $categorias->GetItens());
$smarty->assign('CATEGORIASIN', $categoriasin->GetItens());
$smarty->assign('CATEGORIASBO', $categoriasbo->GetItens());
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('ERRO', '');
$smarty->assign('SUCESSO', '');
$smarty->assign('AVISO', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  Você pode adiconar imagens adicionais do produto acessando a aréa de edição do produto, clicando em <strong>Adicionar imagens adicionais</strong>.
</div>');


if(isset($_POST['pro_nome']) && isset($_POST['pro_valor'])){
$pro_nome      = $_POST['pro_nome'];
$pro_categoria = $_POST['pro_categoria'];
$pro_ativo     = $_POST['pro_ativo'];
$pro_modelo    = $_POST['pro_modelo'];
$pro_ref       = $_POST['pro_ref'];
$pro_valor     = $_POST['pro_valor'];
$pro_estoque     = $_POST['pro_estoque'];
$pro_peso      = $_POST['pro_peso'];
$pro_altura    = $_POST['pro_altura'];
$pro_largura  = $_POST['pro_largura'];
$pro_comprimento  = $_POST['pro_comprimento'];
$pro_img          = $_FILES['pro_img']['name'];
$pro_desc         = $_POST['pro_desc'];
$pro_slug      = $_POST['pro_slug'];
$pro_desconto      = $_POST['pro_desconto'];



if(!empty($_FILES)){
   $upload = new ImageUpload();
   if($upload->Upload(900, 'pro_img', 'img/')){
     $pro_img = $upload->retorno;
   }else{
   	exit('Erro ao enviar a imagem');
   }
}

$gravar = new Produtos();
$gravar->Preparar($pro_nome, $pro_categoria, $pro_ativo, $pro_modelo, $pro_ref, $pro_valor, $pro_estoque, $pro_peso, $pro_altura, $pro_largura, $pro_comprimento, $pro_img, $pro_desc, $pro_slug, $pro_desconto);

if($gravar->Inserir()){
  $smarty->assign('SUCESSO', '<center><div class="col-md-9"><ul class="woo-sucesso margin-top" role="alert">
   <li> Produto cadastrado com sucesso!!</div></li>
   </ul></center>');
    Rotas::Redirecionar(1, Rotas::pag_Add_Produtos());
}else{
	echo'<script>alert("Ocorreu um erro, tente novamente")</script>';
	exit();
 }
}


//$smarty->display('./inc/top-painel.tpl');
//$smarty->display('./inc/header.tpl');
$smarty->display('add_produtos_novo.tpl');
//$smarty->display('./inc/footer.tpl');
?>