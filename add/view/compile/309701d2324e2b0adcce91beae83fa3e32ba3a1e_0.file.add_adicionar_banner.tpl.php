<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-11 20:10:54
  from 'D:\xampp\htdocs\vanuza\add\view\add_adicionar_banner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5df1696e7daf54_18321489',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '309701d2324e2b0adcce91beae83fa3e32ba3a1e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\vanuza\\add\\view\\add_adicionar_banner.tpl',
      1 => 1576102251,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df1696e7daf54_18321489 (Smarty_Internal_Template $_smarty_tpl) {
?> <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/js/ckeditor-full/ckeditor.js"><?php echo '</script'; ?>
> 
 <div class="container-fluid">
  <!-- breadcrumb -->
    <div class="bread-crumb flex-w p-l-25 p-r-15 margin-top p-lr-0-lg">
      <a href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_ADD']->value;?>
" class="stext-109 cl8 hov-cl1 trans-04">
        <i class="fa fa-tachometer"></i> Painel de controle
        <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
      </a>

      <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_BANNERS']->value;?>
" class="stext-109 cl8 hov-cl1 trans-04">
        <i class="fa fa-image"></i> Banners
      </a>

    </div>

  <div class="col-md-12 margin-top"> 
   <h1 class="cl2 mtext-105"> <i class="fa fa-plus"></i> Adicionar novo banner
   </h1>
   <?php echo $_smarty_tpl->tpl_vars['SUCESSO']->value;
echo $_smarty_tpl->tpl_vars['ERRO']->value;?>

<!-- Row Principal -->
<div class="row">
<!--  Col Conteúdo -->
<div class="col-sm-12 col-md-8 col-lg-8">
<div class="box padding-20 margin-top margin-bottom">
<form name="frm_banner" method="post" action=""  enctype="multipart/form-data">

<section class="row" id="camposproduto">
  
        <div class="col-md-12">
        <p class="margin-bottom pull-right red">* Campos obrigatórios</p> 
        </div>
        
        <div class="col-md-12"> 
        <i class="fa fa-info-circle pull-right" data-toggle="tooltip" data-placement="top" title="Adicione aqui o nome do produto" style="position: relative;left:-25px"></i> 
         <label>Titulo</label>
        <div class="bor8 m-b-20 how-pos4-parent">
      <input title="* Titulo do banner" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text"  name="banner_titulo" placeholder="* Titulo do Banner" required>
      </div>
        </div>

        <div class="col-12">
      <label>Descrição</label>
     <div class="m-b-30">
      <textarea class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25 no-resize" name="banner_descricao" id="banner_descricao" placeholder="Descrição do banner"></textarea>
      <?php echo '<script'; ?>
> 
      CKEDITOR.replace( 'banner_descricao' );
      <?php echo '</script'; ?>
>
          
      </div>
      </div>
       
      </div>
    </div>

    <div class="col-sm-12 col-md-4 col-lg-4">
        <div class="box padding-20 margin-top margin-bottom">
         <div class="col-12">
         <?php echo $_smarty_tpl->tpl_vars['AVISO']->value;?>

         </div>

        <div class="col-md-12"> 
          <label>Imagem</label>
        <div class="bor8 m-b-20 how-pos4-parent">

      <input type="file" name="banner_img" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30  relative top-15 text-center inputfile" id="banner_img" required onchange="previewImagemBanner()">

       <div class="text-center preview-imagem">
       <label for="banner_img"><img name="preview_banner" style="width:80%;"></label>
       </div>
       
        <label for="banner_img"><h5 class="text-center">930x365</h5></label>

      <label for="banner_img"><h5 class="text-center">Adicionar Imagem<br>
        <i class="fa fa-upload margin-top"></i></h5></label>

      </div>
        </div>


        <div class="col-md-12"> 
        <i class="fa fa-info-circle pull-right" data-toggle="tooltip" data-placement="top" title="Adicione aqui o nome do produto" style="position: relative;left:-25px"></i> 
         <label>Ordem</label>
        <div class="bor8 m-b-20 how-pos4-parent">
      <input title="* Ordem de exibição do banner" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text"  name="banner_ordem" placeholder="* Ordem de exibição do Banner" required>
      </div>
        </div>

     
        <div class="col-12"> 
          <button type="submit" class="botao btn-login" name="btn_gravar"> <i class="zmdi zmdi-check f-25" style="position:relative;top:3px;"></i> Gravar </button>
      </div>
        </div>

        
      </div>
    </div>
     </form> 
      </section>

  </div><!--/Col 12-->
 </div><!--/Row-->
</div><!--/Container-->
<?php }
}
