<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-04 20:01:53
  from 'D:\xampp\htdocs\loja_adaptada\add\view\add_blog_editar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5de82cd1260ae6_75604138',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bad30b025b513ce57a36f41506f31602c4267ad7' => 
    array (
      0 => 'D:\\xampp\\htdocs\\loja_adaptada\\add\\view\\add_blog_editar.tpl',
      1 => 1575496907,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de82cd1260ae6_75604138 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
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

      <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_BLOG']->value;?>
" class="stext-109 cl8 hov-cl1 trans-04">
        <i class="fa fa-newspaper-o"></i> Blog
        <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
      </a>

      <span class="stext-109 cl4"><?php echo $_smarty_tpl->tpl_vars['BLOG']->value[1]['blog_titulo'];?>
</span>

    </div>
    
  <div class="col-md-12 margin-top"> 
   <h1 class="cl2 mtext-105"> <i class="fa fa-pencil"></i> Editar post
   </h1>
   <?php echo $_smarty_tpl->tpl_vars['SUCESSO']->value;
echo $_smarty_tpl->tpl_vars['ERRO']->value;?>

<!-- Row Principal -->
<div class="row">
<!--  Col Conteúdo -->
<div class="col-sm-12 col-md-8 col-lg-8">
<div class="box padding-20 margin-top margin-bottom">
<form name="frm_blog" method="post" action=""  enctype="multipart/form-data">

<section class="row" id="camposblog">
  
        <div class="col-md-12">
        
        </div>
        
        <div class="col-md-12"> 
         <label>Titulo</label>
        <div class="bor8 m-b-20 how-pos4-parent">
      <input title="* Titulo do post" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text"  name="blog_titulo" placeholder="* Titulo do post" required value="<?php echo $_smarty_tpl->tpl_vars['BLOG']->value[1]['blog_titulo'];?>
">
      </div>
        </div>

        <div class="col-12">
      <label>Conteúdo</label>
     <div class="m-b-30">
      <textarea class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25 no-resize" name="blog_descricao" id="blog_descricao" placeholder="Conteúdo do post" required><?php echo $_smarty_tpl->tpl_vars['BLOG']->value[1]['blog_conteudo'];?>
</textarea>
      <?php echo '<script'; ?>
> 
      CKEDITOR.replace( 'blog_descricao' );
      <?php echo '</script'; ?>
>
          
      </div>
      </div>
       
      </div>
    </div>

    <div class="col-sm-12 col-md-4 col-lg-4">
        <div class="box padding-20 margin-top margin-bottom">
        
        <div class="col-md-12"> 
          <label>Imagem destacada</label>
        <div class="m-b-20 how-pos4-parent">
      <label for="blog_img"><img name="preview_blog" src="<?php echo $_smarty_tpl->tpl_vars['GET_SITE']->value;?>
/media/blog/<?php echo $_smarty_tpl->tpl_vars['BLOG']->value[1]['blog_img'];?>
" class="img-thumbnail padding-20 " alt=""></label>

      <input type="file" name="blog_img" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30 relative top-15 text-center inputfile" id="blog_img" onchange="previewImagemBlog()">

      <label for="blog_img" class="margin-top" style="outline:none;"><h5 class="text-center">Adicionar Imagem<br>
        <i class="fa fa-upload margin-top"></i></h5></label>


      <!--pega o nome da imagem atual -->
      <input type="hidden" name="blog_img_atual" id="blog_img_atual" value="<?php echo $_smarty_tpl->tpl_vars['BLOG']->value[1]['blog_img_atual'];?>
">
      <!----pega o caminho completo da imagem atual -->
       <input type="hidden" name="blog_img_arquivo" id="blog_img_arquivo" value="<?php echo $_smarty_tpl->tpl_vars['BLOG']->value[1]['blog_img_arquivo'];?>
">
      </div>
        </div>

        <div class="col-md-12">
         <label>Categoria</label>
        <div class="rs1-select2 rs2-select2 bg0 m-b-12 m-t-9">
      <div class="bor8 bg0 size-116">
      <select  required class="js-select2" name="blog_categorias" >
      <option value="<?php echo $_smarty_tpl->tpl_vars['BLOG']->value[1]['blog_categorias'];?>
"> <?php echo $_smarty_tpl->tpl_vars['BLOG']->value[1]['blog_categorias'];?>
 </option> 
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIAS']->value, 'C');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
?>                    
        <option value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cateblog_nome'];?>
"><?php echo $_smarty_tpl->tpl_vars['C']->value['cateblog_nome'];?>
</option>                
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
      <div class="dropDownSelect2"></div>
      </div>     
      </div>
        </div>

      <div class="col-md-12">
      <label>Mostrar no site</label>
      <div class="rs1-select2 rs2-select2 bg0 m-b-12 m-t-9">
      <div class="bor8 bg0 size-116">
      <select  required class="js-select2" name="blog_status">
      <?php if ($_smarty_tpl->tpl_vars['BLOG']->value[1]['blog_status'] == "NAO") {?>
      <option value="<?php echo $_smarty_tpl->tpl_vars['BLOG']->value[1]['blog_status'];?>
"> Não </option>
      <option value="publicado"> Sim </option> 
      <?php } else { ?>
      <option value="<?php echo $_smarty_tpl->tpl_vars['BLOG']->value[1]['blog_status'];?>
"> Sim </option>
      <option value="NAO"> Não </option>
      <?php }?>
      </select>
      <div class="dropDownSelect2"></div>
      </div>     
      </div>
      </div>

      <!-- <div class="col-12"> 
          <label class="text-left">URL</label>
        <div class="bor8 m-b-20 how-pos4-parent">
      <input title="* Views do post" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="blog_url" readonly  value="<?php echo $_smarty_tpl->tpl_vars['BLOG']->value[1]['blog_url'];?>
">
      </div>
        </div> -->


        <div class="col-12"> 
          <label class="text-left">Views</label>
        <div class="bor8 m-b-20 how-pos4-parent">
      <input title="* Views do post" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" readonly name="blog_views" value="<?php echo $_smarty_tpl->tpl_vars['BLOG']->value[1]['blog_views'];?>
">
      </div>
        </div>

        <div class="col-12"> 
        <button type="submit" class="botao btn-login" name="btn_gravar"> <i class="zmdi zmdi-check f-25" style="position:relative;top:3px;"></i> Salvar </button>
        <input type="hidden" name="blog_id" value="<?php echo $_smarty_tpl->tpl_vars['BLOG']->value[1]['blog_id'];?>
">
      </div>
        </form>

        <div class="col-md-12 text-right  margin-bottom margin-top">
        <!-- Botão Modal -->
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#Modal">
         <i class="fa fa-trash-o f-20"></i> Apagar Post 
        </button>

        <!-- Modal -->
        <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Apagar Post</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body text-center">
        
              <!---botao que apagar o produto de uma vez -->
              <form name="frm_apagar" method="post" action="">
              <label>Tem certeza que deseja apagar este post?</label>
              <div style="display:block ruby">
              <input type="radio" name="confirmar" value="SIM" required>Sim
              <!-- <input type="radio" name="confirmar" value="NAO" required>Não -->
              </div>
              <button class="btn btn-danger " name="btn_apagar"><i class="glyphicon glyphicon-remove"></i> Confirmar </button> 
                <button class="btn btn-success" data-dismiss="modal"> Cancelar </button>
              <input type="hidden" name="blog_id_apagar" value="<?php echo $_smarty_tpl->tpl_vars['BLOG']->value[1]['blog_id'];?>
">
              <input type="hidden" name="blog_apagar" value="SIM">
                          
              <!----pega o caminho completo da imagem atual -->
              <input type="hidden" name="blog_img_arquivo" id="blog_img_arquivo" value="<?php echo $_smarty_tpl->tpl_vars['BLOG']->value[1]['blog_img_arquivo'];?>
">

              </form>
      
               </div>
              </div>
             </div>
            </div>
          </div>

          <div class="col-md-12 text-right margin-bottom">    
        <form name="ver_post" method="post" action="<?php echo $_smarty_tpl->tpl_vars['GET_SITE']->value;?>
/conteudo/<?php echo $_smarty_tpl->tpl_vars['BLOG']->value[1]['blog_url'];?>
" target="_blank">
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['BLOG']->value[1]['blog_id'];?>
">
        <input type="hidden" name="titulo" value="<?php echo $_smarty_tpl->tpl_vars['BLOG']->value[1]['blog_titulo'];?>
">
        <button class="btn btn-success"><i class="fa fa-eye f-20"></i> Visualizar</button>
       </form>
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
