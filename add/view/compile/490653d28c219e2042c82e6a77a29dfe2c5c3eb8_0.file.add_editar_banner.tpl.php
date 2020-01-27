<?php
/* Smarty version 3.1.34-dev-7, created on 2019-11-28 17:13:20
  from 'D:\xampp\htdocs\loja_adaptada\add\view\add_editar_banner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5de01c50942989_07190686',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '490653d28c219e2042c82e6a77a29dfe2c5c3eb8' => 
    array (
      0 => 'D:\\xampp\\htdocs\\loja_adaptada\\add\\view\\add_editar_banner.tpl',
      1 => 1574968358,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de01c50942989_07190686 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/js/ckeditor/ckeditor.js"><?php echo '</script'; ?>
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
   <h1 class="cl2 mtext-105"> <i class="fa fa-pencil"></i> Editar banner
   </h1>
   <?php echo $_smarty_tpl->tpl_vars['SUCESSO']->value;
echo $_smarty_tpl->tpl_vars['ERRO']->value;?>

<!-- Row Principal -->
<div class="row">
<!--  Col Conteúdo -->
<div class="col-sm-12 col-md-8 col-lg-8">
<div class="box padding-20 margin-top margin-bottom">
<form name="frm_produto" method="post" action=""  enctype="multipart/form-data">

<section class="row" id="camposproduto">
        
        <div class="col-md-12"> 
         <label>Titulo</label>
        <div class="bor8 m-b-20 how-pos4-parent">
      <input title="* Titulo do banner" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="banner_titulo" value="<?php echo $_smarty_tpl->tpl_vars['BANNER']->value[1]['titulo'];?>
" required>
      </div>
        </div>

        <div class="col-12">
      <label>Descrição</label>
     <div class="m-b-30">
      <textarea class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25 no-resize" name="banner_descricao" id="banner_descricao" required><?php echo $_smarty_tpl->tpl_vars['BANNER']->value[1]['descricao'];?>
</textarea>
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
          <div class="row">
        <div class="col-md-12"> 
          <label>Imagem</label>
        <div class="m-b-20 how-pos4-parent">
      <label for="banner_img"><img name="preview_banner" src="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
/media/banners/<?php echo $_smarty_tpl->tpl_vars['BANNER']->value[1]['img'];?>
" class="img-thumbnail padding-20 " alt=""></label>

      <input type="file" name="banner_img" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30 relative top-15 text-center inputfile" id="banner_img" onchange="previewImagemBanner()">

      <label for="banner_img" class="margin-top" style="outline:none;"><h5 class="text-center">Adicionar Imagem<br>
        <i class="fa fa-upload margin-top"></i></h5></label>




      <!--pega o nome da imagem atual -->
      <input type="hidden" name="banner_img_atual" id="banner_img_atual" value="<?php echo $_smarty_tpl->tpl_vars['BANNER']->value[1]['banner_img_atual'];?>
">
      <!----pega o caminho completo da imagem atual -->
       <input type="hidden" name="banner_img_arquivo" id="banner_img_arquivo" value="<?php echo $_smarty_tpl->tpl_vars['BANNER']->value[1]['banner_img_arquivo'];?>
">
      </div>
        </div>

        <div class="col-md-12"> 
         <label>Ordem</label>
        <div class="bor8 m-b-20 how-pos4-parent">
      <input title="* Ordem de exibição do banner" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="banner_ordem" value="<?php echo $_smarty_tpl->tpl_vars['BANNER']->value[1]['ordem'];?>
" required>
      </div>
        </div>


        <div class="col-12"> 
        <button type="submit" class="botao btn-login" name="btn_gravar"> <i class="zmdi zmdi-check f-25" style="position:relative;top:3px;"></i> Salvar </button>
        <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['BANNER']->value[1]['id'];?>
">
      </div>
        </form>

        <div class="col-md-12 text-right  margin-bottom margin-top">
        <!-- Botão Modal -->
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#Modal">
         <i class="fa fa-trash-o f-20"></i> Apagar
        </button>

        <!-- Modal -->
        <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Apagar Banner</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body text-center">
        
              <!---botao que para apagar o banner -->
              <form name="frm_apagar" method="post" action="">
              <label>Tem certeza que deseja apagar este banner?</label>
              <div style="display:block ruby">
              <input type="radio" name="confirmar" value="SIM" required>Sim
              <!-- <input type="radio" name="confirmar" value="NAO" required>Não -->
              </div>
              <!---botao que apagar o produto de uma vez -->
              <button class="btn btn-danger " name="btn_apagar"><i class="glyphicon glyphicon-remove"></i> Confirmar </button> 
                <button class="btn btn-success" data-dismiss="modal"> Cancelar </button>
              <input type="hidden" name="banner_id_apagar" value="<?php echo $_smarty_tpl->tpl_vars['BANNER']->value[1]['id'];?>
">
              <input type="hidden" name="banner_apagar" value="SIM">
                          
              <!----pega o caminho completo da imagem atual -->
              <input type="hidden" name="banner_img_arquivo" id="banner_img_arquivo" value="<?php echo $_smarty_tpl->tpl_vars['BANNER']->value[1]['banner_img_arquivo'];?>
">

              </form>
      
               </div>
              </div>
             </div>
            </div>
          </div>

          

        
         </div>
        </div>

      </div>
    </div>
  
  </section>

  </div><!--/Col 12-->
 </div><!--/Row-->
</div><!--/Container-->

<?php }
}
